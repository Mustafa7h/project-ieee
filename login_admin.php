<?php
require("./includes/function/function.php");
session_start();

$email = $_POST["admin_email"];
$password = $_POST['pass'];


login_admin($email,$password);


