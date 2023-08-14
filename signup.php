<?php 

require_once("connect_db.php");
require("./includes/function/function.php");

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $name   = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email  = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password  = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    

    // first way to hash password
    // $hased_password = sha1($password);

    //second way to hash password
    //$hased_password = password_hash($password,PASSWORD_DEFAULT);

   signup($name,$email,$password,$phone);
}
  ?>





