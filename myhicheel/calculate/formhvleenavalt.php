<?php
// $email = $_POST['email'];
// $name = $_POST['name'];
// $message = $_POST['message'];


// switch ($email) {
//     case "":
//       echo "email hooson bn" ;
//       break;
//     default:
//       echo "bih";
//   }

// echo($email);
// echo "<br>";
// echo strlen($email);
// if(strlen($email) == 0){
//     echo "email хаягаа оруулна уу";
//     echo "<br>";
//     die();
// }else if($name == ""){
//     echo "name хаягаа оруулна уу";
//     echo "<br>";
//     die();
// }else if($message == ""){
//     echo "message хаягаа оруулна уу";
//     echo "<br>";
//     die();
// } 

// <?php


        function hoosonbish($field) {
           if($field != "") {
                return true;
           }
           return false;
        }
        function zvgeerprint() {
            echo"<br>";
        }
        function knop() {
            echo '<button type=submit>calculate</button>';
        }
        function calculate($nomer1, $nomer2, $uildel){
            switch($uildel) {
                case "+":
                    return $nomer1 + $nomer2;
                break;
                case "-":
                    return $nomer1 - $nomer2;
                break;
                case "*":
                    return $nomer1 * $nomer2;
                break;
                case "/":
                    return $nomer1 / $nomer2;
                break;
                default:
                    $hariu = 'Aldaa';

            } 
            return 'tom aldaa';
        }
        if ( hoosonbish($_POST['nomer1']) && hoosonbish($_POST['nomer2']) && hoosonbish($_POST['uildel']))
        {
            // $uildel = $_POST['uildel'];

            $hariu = calculate($_POST['nomer1'], $_POST['nomer2'], $_POST['uildel']);
            if(hoosonbish($hariu)){ 
            echo $hariu;
            }

            // print_r($_GET['email']);
        }
        print_r($_POST);
 ?>




  <!-- <h1><?php echo $name; ?></h1> -->
<!-- ( <span  class="badge bg-secondary"><?php echo $email; ?></span> ) -->

<!-- <p><?php echo $message; ?></p>  -->