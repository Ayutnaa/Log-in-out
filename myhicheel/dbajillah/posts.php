<?php

include 'includes/logincheck.php';
include 'includes/header.php';
?>  
    <?php include 'navbar.php';?>
    <?php
    
    $sql = "SELECT * FROM `posts` WHERE user_id = " . $user['id'];
    $result = $conn->query($sql);
    $posts = [];
    // print_r($result);
    // die();
          if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                  $posts[] = $row;
              }
              print_r($posts);
              die();
            
            }
    ?>
   <div class=""container>
        <div class="row">
            <div class="col-md-8 col-offset-2">
                <br><br>
                <?php if(count($posts) > 0): ?>
                    <?php foreach($posts as $post): ?>
                        <?php print_r($post); ?>
                             
                                              
                <div class="card" style="width: 18rem;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['user_id']; ?></h5>
                        <p class="card-text"><?php echo $post['post_content']; ?></p>
                        <!-- <a href="malito:<?php echo $user['name']; ?>" class="btn btn promary"><?php echo $user['email']; ?></a> -->
                    </div>
                    </div>  
                    <?php endforeach; ?>
                    <?php endif; ?>

                        <form action="/createpost.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">title</label>
                            <input type="email" name="post_title"  class="form-control" >
                        
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">content</label>
                            <textarea name="post_content" class="form-control"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                <!-- <form name="name" value="<?php echo $row['name']; ?>">
                </form> -->
            </div>
        </div>
   </div>

   <?php include  'includes/footer.php'; ?>