<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goldenglow";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn) {
    echo "Connected successfully";

    // Hashed password (optional, por rekomandohet)
    $hashedPassword = password_hash("uresa456", PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('uresa', 'uresa@gmail.com', '$hashedPassword')";
    $conn->execute_query($sql);

} else {
    die("Connection failed: " . $conn->connect_error);
}
