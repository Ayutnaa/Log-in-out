<?php

session_start();
if(isset($_SESSION['username'])){
    header("Location: /");
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php include 'navbar.php';?>
    
   <?php
  // mysql -> <select -> where -> username = $_SESSION['username'];
  //$_SESSION['username']

  session_start();
  print_r($_POST);
  
  // echo password_hash('addad',PASSWORD_DEFAULT);
  // die();
  
  
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
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM `users` WHERE `username` = '$username' ";
  $result = $conn->query($sql);
          if ($result->num_rows == 1) {
              $row = $result->fetch_assoc();
           
              if(password_verify($_POST['password'], $row['password'])){
                  $_SESSION['username'] = $row['username'];
                  header("location: /profile.php");
      
                  exit();
              }else {
                  header("location: /?aldaa=password");
                  exit();
                  } 
        //            else {
        //     header("location: /?aldaa=profile");
        //     exit();
         }
         
   ?>
   <div class="card" style="width: 18rem;">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
        <h5 class="card-title"><?php echo $row['name']; ?></h5>
        <p class="card-text"><?php echo $row['username']; ?></p>
        <a href="malito:<?php echo $row['name']; ?>" class="btn btn promary"><?php echo $row['email']; ?></a>
    </div>
    </div>  

        <form action="/edit.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="email" value="<?php echo $row['username']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

   <!-- <form name="name" value="<?php echo $row['name']; ?>">
   </form> -->
</body>
</html>