<?php  
    function hoosonbish($field){

        if($field != ""){
    
    return true;
    }return false;
    }

if(isset($_POST['email'])){
    foreach($_POST as $index => $data){
        if(hoosonbish($data) == false)
        die('hooson bn' . $index);
        
    }
    }
    if($_POST['password'] != $_POST['password_confirm']) {
    header('Location: /register.php?error=confirm');
    exit();
    }
    
$email = $_POST['email'];
$username = $_POST['username'];
$name = $_POST['name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$servername = "localhost";
$dbusername = "root";
$dbpassword = "mysql";
$dbname = "hicheel";
  
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword , $dbname);

// Check connection
if ($conn->connect_error) {
    header("location: /register.php?error=database");
    
//   die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `users` WHERE `email` = '$email' ";
$result = $conn->query($sql);
//print_r($->num_rows);
//die();

if ($result->num_rows > 0){
    header("Location: /register.php?error=email");
}

//die('urgeljilj bn');

$sql = "SELECT * FROM `users` WHERE `username` = '$username' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header("Location: /register.php?error=username");
    exit();
}
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// die('belen bolloo');
$insertSql = "INSERT INTO `users` (`name` , `username` , `email`, `password`) 
              VALUE ('$name' , '$username' , '$email' , '$password')";
// die($insertSql);

$result = $conn->query($insertSql);
if($result === TRUE){
    //login user
    header("Location: /profile.php");
    exit();
} else {
    header("Location: /register.php?error=unknown");
    exit();
}

// die('connected');
$conn->close();

// } else {
    header("Location: /register.php?success");
// }

// for ($x = 0; $x < 100; $x++) {
//     // echo "The number is: $x <br>";
//     $sql = "INSERT into `users`
//     (`name`, `username`,`email`,`password`)
//   VALUES 
//     ('tuya+$x', 'b+$x', 'tuya+$x@gmail.com','1234+$x')" ;
// //    echo $x;
//    die($sql);
    // $result = $conn->query($sql);
    // if ($conn->query($sql) === TRUE) {
    //     echo "+" . "<br>";
    //   } else {
    //     echo "Error: " . $sql . "<hr>" . $conn->error;
    //     die();
    //   }
    
    
    
        
        
    //     print_r($_POST);
    // } else {
    
    
    
?>