<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goldenglow"; // i merr me xampp nese don

$conn = new mysqli($servername, $username, $password, $dbname);


if($conn) {
    echo "Connected successfully";


    // $sql = "CREATE TABLE users(user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

    //$sql = "INSERT INTO users (username, email, password) VALUES ('uresa', 'uresa@gmail.com', 'uresa123')";
    //$conn->execute_query($sql);
    $sql = "INSERT INTO users (username, email, password) VALUES ('fjolla', 'fjolla@gmail.com', 'fjollafjolla')";
    $conn->execute_query($sql);
}
else{
    die("Connection failed: " . $conn->connect_error);
}