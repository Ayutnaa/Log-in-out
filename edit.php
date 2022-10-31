<?php

include 'includes/logincheck.php';
include 'includes/header.php';
?>
    <?php include 'navbar.php';?>  
    <?php
 
  
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

<?php include 'includes/footer.php'; ?>