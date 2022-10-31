<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: /");
    exit();
    }
    $user = null;
    // die($_SESSION['username']);
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "mysql";
    $dbname = "hicheel";
    
    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword , $dbname);

    // Check connection
    if ($conn->connect_error) {
        header("location: /login.php?error=database");   
    }
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM `users` WHERE `username` = '$username' ";
    $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                }else {
                    header("location: /?aldaa=profile");
                    exit();
                    }     
?>