<?php

if($_SERVER["REQUEST_METHOD"]  == "POST"){
 $name = $_POST["name"];
 $email = $_POST["email"];
    $message = $_POST["message"];

  if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])){
    echo "All fields are required";

}

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO contactform (NAME , EMAIL, MESSAGE)
        VALUES (?, ?, ?)";

        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $_POST["message"]);

if ($stmt->execute()) {

    echo "Message receive. Thank you for your contribution";
    header("Location: index.php");
    exit;
    
} else {
    
   echo "Something went wrong. Please try again";
}
}