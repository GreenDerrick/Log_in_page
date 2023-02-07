<?php
// require_once "conn.php";
if(isset($_POST['signup'])) {
        
    $name = $_POST['name'];
    $user = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass0 = $_POST['pass0'];
    $location = $_POST['location'];
    $preg_name = "/^[a-zA-Z]$/";
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    $number = "/^[0-9]+$/";
    $warn = "<i class='fa fa-warning' style='background:none; color:#f00;'></i>";
    
   require_once "functions.php"; if(emptyInput($name,$user,$phone,$email,$pass,$pass0,$location)!=FALSE) {
        header("location:signup0.php?error=Empty Input");
        exit();
            
    } 
//    if(invalidName($name) !=FALSE) {
//        header("location:signup0.php?error=The name entered is invalid, please make sure not to include any numbers or special characters");
//        exit();
//       
//   } 
    if(invalidEmail($email) !=FALSE) {
        header("location:signup0.php?error=The email entered is incorrect, use the format  $email@email.com");
        exit();
       
   }
    if(invalidPhone($phone)!= FALSE) {
        header("location:signup0.php?error=PLease provide a valid phone number e.g.0712345678 ");
        exit();
        
    }

} else {
    header('location:signup0.php?');
}