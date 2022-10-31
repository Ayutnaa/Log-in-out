<?php
function hoosonbn($field) {
    if( $field != "" ) {
         return true;
    }
    return false;
 }

if(isset ($_GET['haanaas']) && $_GET['haanaas'] !=""){
    echo "Origin: " . $_GET['haanaas'] . " file";
}
if(count($_POST) > 0){
    // print_r($_POST['password']);
    hr();
    foreach($_POST as $index => $medeelel){
        if(hoosonbn($medeelel)){
            echo "$index hooson bn";
              die();
        }
    echo "$index : $value <br>";
    }
}
$too = [2,2,34,33,56,3,4,56,32];
foreach($too as $in => $to){
    echo "$in : $to <br>";
}
?>