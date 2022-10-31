<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<?php // include 'registration.php'; ?>
<?php include 'navbar.php'; ?>

<div class="container">
    <?php
    if(isset($_GET['error'])) {
        
        switch( $_GET['error']) {
          case 'confirm':
          $aldaa = 'Password aldaa!';
          break;
          case 'database':
            $aldaa = 'databasw aldaa';
            break;
          case 'name':
            $aldaa = 'name aldaa';
            break;
            default:
            $aldaa ='aldaa';
    
        }
    }
    ?>       

        <!-- if(isset($_GET['error'] == 'Confirm')){
                if($_GET['error'] == 'confirm')
            <div class="alert alert-danger" role="alert">
              pass aldaa
            </div>
            
            <div class="alert alert-danger" role="alert">
              database aldaa!
            <!-- </div> -->
            

   
    
    <form action="registration.php" method="POST">
        <?php
        if(isset($aldaa)) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $aldaa; ?> 
            </div>
         <?php   
        }
        ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">name</label>
        <input value="" type="text" required name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">username</label>
        <input value="" type="text" required name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input value="" type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input value=""type="password" required name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password confirm</label>
        <input value="" type="password" required name="password_confirm" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label required class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>