<?php

$conn = new mysqli('localhost','root','','complaints');
include('../connection.php');
    if(isset($_POST['admin_login']))
    {
        $mail = ($_POST['email']);
        $pass = ($_POST['password_hash']);

        echo $mail;
        echo $pass;
        $sql = "SELECT `email` FROM `user` WHERE `email`='$mail' AND `pass`='$pass'";

        $result = $conn->query($sql);

        echo $result->num_rows;
        if($result->num_rows>0)
        {
            session_start();
            $_SESSION['userMail'] = $mail;
            $_SESSION['userPass'] = $pass;
            header('location:index.php?loginDone');

        }else{

            echo 'No result Found ...';
            echo '<a href="../index.php">Back to home page </a>';        
        }
    }
?>
