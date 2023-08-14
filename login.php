

<?php 
require("./includes/function/function.php");
session_start();

 $email=$_POST["email"];
 $password=$_POST['password'];

 login($email,$password);

?>





