<?php

$servername = "localhost";
$username = "root"; // Replace 'your_username' with your actual username
$password = ""; // Replace 'your_password' with your actual password
$dbname = "complaints"; // Ensure this is your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

