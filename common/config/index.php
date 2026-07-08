<?php
echo "<h1>Localhost Server is Working!</h1>";

// Change these credentials to match your local MySQL server setup
$host = "127.0.0.1";
$user = "sa"; 
$pass = "60360"; 

try {
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color:green;'>✔ Successfully connected to MySQL database!</p>";
} catch(PDOException $e) {
    echo "<p style='color:red;'>✘ MySQL Connection failed: " . $e->getMessage() . "</p>";
}
?>
