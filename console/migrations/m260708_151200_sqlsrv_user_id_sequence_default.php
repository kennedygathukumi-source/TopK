<?php

declare(strict_types=1);

use yii\db\Migration;

final class m260708_151200_sqlsrv_user_id_sequence_default extends Migration
{
    public function safeUp(): void
    {
        // Only applicable for SQL Server.
        if ($this->db->driverName !== 'sqlsrv') {
            return;
        }

        // Your error message shows `hospital-db.dbo.user`, so assume dbo + [user].
        // This avoids rebuilding the table (ALTER COLUMN ... IDENTITY isn't supported),
        // while still making inserts omit `id` safely.
        $this->execute(<<<'SQL'
DECLARE @schema sysname = N'dbo';
DECLARE @table sysname = N'user';
DECLARE @fullTable nvarchar(300) = QUOTENAME(@schema) + N'.' + QUOTENAME(@table);
DECLARE @seqName sysname = N'user_id_seq';
DECLARE @fullSeq nvarchar(300) = QUOTENAME(@schema) + N'.' + QUOTENAME(@seqName);
DECLARE @dfName sysname = N'DF_user_id';

IF OBJECT_ID(@fullTable, 'U') IS NULL
BEGIN
    THROW 50000, 'Table dbo.[user] not found.', 1;
END

-- Create sequence starting after current max(id)
IF NOT EXISTS (
    SELECT 1
    FROM sys.sequences s
    WHERE s.name = @seqName AND SCHEMA_NAME(s.schema_id) = @schema
)
BEGIN
    DECLARE @start int;
    DECLARE @sql nvarchar(max);

    SET @sql = N'SELECT @start = ISNULL(MAX([id]), 0) + 1 FROM ' + @fullTable + N';';
    EXEC sp_executesql @sql, N'@start int OUTPUT', @start = @start OUTPUT;

    IF @start IS NULL OR @start < 1 SET @start = 1;

    SET @sql =
        N'CREATE SEQUENCE ' + @fullSeq +
        N' AS int START WITH ' + CAST(@start AS nvarchar(20)) +
        N' INCREMENT BY 1;';
    EXEC sp_executesql @sql;
END

-- Add default constraint (NEXT VALUE FOR ...) if id has no default yet
IF NOT EXISTS (
    SELECT 1
    FROM sys.default_constraints dc
    INNER JOIN sys.columns c
        ON c.object_id = dc.parent_object_id
        AND c.column_id = dc.parent_column_id
    WHERE dc.parent_object_id = OBJECT_ID(@fullTable)
      AND c.name = N'id'
)
BEGIN
    DECLARE @sql2 nvarchar(max) =
        N'ALTER TABLE ' + @fullTable +
        N' ADD CONSTRAINT ' + QUOTENAME(@dfName) +
        N' DEFAULT (NEXT VALUE FOR ' + @fullSeq + N') FOR ' + QUOTENAME(N'id') + N';';
    EXEC sp_executesql @sql2;
END
SQL);
    }

    public function safeDown(): void
    {
        if ($this->db->driverName !== 'sqlsrv') {
            return;
        }

        $this->execute(<<<'SQL'
DECLARE @schema sysname = N'dbo';
DECLARE @table sysname = N'user';
DECLARE @fullTable nvarchar(300) = QUOTENAME(@schema) + N'.' + QUOTENAME(@table);
DECLARE @seqName sysname = N'user_id_seq';
DECLARE @fullSeq nvarchar(300) = QUOTENAME(@schema) + N'.' + QUOTENAME(@seqName);

IF OBJECT_ID(@fullTable, 'U') IS NOT NULL
BEGIN
    DECLARE @df sysname;
    SELECT TOP 1 @df = dc.name
    FROM sys.default_constraints dc
    INNER JOIN sys.columns c
        ON c.object_id = dc.parent_object_id
        AND c.column_id = dc.parent_column_id
    WHERE dc.parent_object_id = OBJECT_ID(@fullTable)
      AND c.name = N'id';

    IF @df IS NOT NULL
    BEGIN
        DECLARE @sql nvarchar(max) =
            N'ALTER TABLE ' + @fullTable + N' DROP CONSTRAINT ' + QUOTENAME(@df) + N';';
        EXEC sp_executesql @sql;
    END
END

IF OBJECT_ID(@fullSeq, 'SO') IS NOT NULL
BEGIN
    DECLARE @sql2 nvarchar(max) = N'DROP SEQUENCE ' + @fullSeq + N';';
    EXEC sp_executesql @sql2;
END
SQL);
    }
}

