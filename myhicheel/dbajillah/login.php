<?php


// echo password_hash('addad',PASSWORD_DEFAULT);
// die();
if(isset($_POST['email']) && isset($_POST['password'])){
    
$email = $_POST['email'];
$password = $_POST['password'];

$servername = "localhost";
$dbusername = "root";
$dbpassword = "mysql";
$dbname = "hicheel";
  
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword , $dbname);

// Check connection
if ($conn->connect_error) {
    header("location: /login.php?error=database");
    
//   die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `users` WHERE `email` = '$email' ";
$result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if(password_verify($_POST['password'], $row['password'])){
                $_SESSION['username'] = $row['username'];
                header("location: /profile.php");
                //print_r($_SESSION);
                
                
                exit();
            }else {
                header("location: /?aldaa=password");}
                exit();
                }   else {
            header("location: /?aldaa=num_rows");
            exit();
        }

// if ($result->num_rows > 0){
//     header("Location: /login.php?error=email");
// }
$sql = "SELECT * FROM `users` WHERE `password` = '$password' ";
$result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     if(password_verify($_POST['password'], $row['password'])){
    //         die('login hii');
    //     }else {
    //         header("location: /?aldaa=password");}
    //         }   else {
    //     header("location: /?aldaa=num_rows");
    //     exit();
    // }

} else {
    header("Location: /");
    exit();
}


?>
