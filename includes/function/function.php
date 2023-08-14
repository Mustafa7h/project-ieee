<?php
/*
===============================================
================= signup ================
===============================================
*/
function signup($name,$email,$password,$phone){
global $con;
$stmt = $con->prepare("INSERT INTO signup (name,email,password,phone) value(?,?,?,?)");
$stmt->execute(array($name,$email,$password,$phone));


header("Location:login.php");
}

/*
===============================================
================= login as user ================
===============================================
*/
function  login($email,$password){

$conn = new mysqli('localhost', 'root','', 'library');


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{

    $st= $conn->prepare("SELECT * FROM signup WHERE email=?");
    $st->bind_param("s",$email);
    $st->execute();

    $res=$st->get_result();
    if($res->num_rows>0){
    
    $data=$res->fetch_assoc();
    if($data['password']===$password){

        header("location:index.php");
    
        $_SESSION['email'] = $email;
}
else{
   
header("location:login.html");
        }
    }
else{
    
header("location:login.html");
}
}
}

/*
===============================================
================= login as admin ================
===============================================
*/
function login_admin($email,$password){
$conn = new mysqli('localhost', 'root', '', 'library');


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} else {

$st = $conn->prepare("SELECT * FROM admin1 WHERE admin_email=?");
$st->bind_param("s", $email);
$st->execute();

$res = $st->get_result();
if ($res->num_rows > 0) {

$data = $res->fetch_assoc();
if ($data['pass'] === $password) {

    header("location:home.php");

    $_SESSION['admin_email'] = $email;
} else {


    header("location:login_admin.html");
}
} else {

header("location:login_admin.html");
}
}
}

/*
===============================================
================= form ================
===============================================
*/
function form($name,$phone,$book_name,$quantity){
global $con;
    $stmt = $con->prepare("INSERT INTO form (name,phone,book_name,quantity) value(?,?,?,?)");
    $stmt->execute(array($name,$phone,$book_name,$quantity));
    header("location:invoice.php");
}

/*
===============================================
================= get all data ================
===============================================
*/
function get_all_data($table){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

/*
===============================================
================= update 1 ================
===============================================
*/
function update_science($image,$price){
    global $con;
    $stmt = $con->prepare('UPDATE science_book SET image=?,price=? WHERE id=?');
    $stmt->execute(array($image,$price,$_GET['book_id']));

    
    header('Refresh:3;url=home.php');
}

/*
===============================================
================= update 2 ================
===============================================
*/
function update_physics($image,$price){
    global $con;
    $stmt = $con->prepare('UPDATE physics_book SET image=?,price=? WHERE id=?');
    $stmt->execute(array($image,$price,$_GET['book_id']));

    
    header('Refresh:3;url=home.php');
}

/*
===============================================
================= update 3 ================
===============================================
*/
function update_history($image,$price){
    global $con;
    $stmt = $con->prepare('UPDATE history_book SET image=?,price=? WHERE id=?');
    $stmt->execute(array($image,$price,$_GET['book_id']));

    
    header('Refresh:3;url=home.php');
}

/*
===============================================
================= update 4 ================
===============================================
*/
function update_sports($image,$price){
    global $con;
    $stmt = $con->prepare('UPDATE sports_book SET image=?,price=? WHERE id=?');
    $stmt->execute(array($image,$price,$_GET['book_id']));

    
    header('Refresh:3;url=home.php');
}


/*
===============================================
============= get book with id ============
===============================================
*/
function get_book_with_id($table,$id){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table WHERE id=?");
    $stmt->execute(array($id));
    $data = $stmt->fetch();
    return $data;
}

/*
===============================================
============= delete book with id ========
===============================================
*/

function delete_with_id($table,$id){
    global $con;
    $stmt = $con->prepare("DELETE FROM $table WHERE id=?");
    $stmt->execute(array($id));

    header('location:home.php');
}

/*
===============================================
================= add book ================
===============================================
*/
function add($image,$price,$table){
    global $con;
    $stmt = $con->prepare("INSERT INTO $table(image,price) value(?,?)");
    $stmt->execute(array($image,$price));

    
    header("Refresh:3;url=home.php"); 
}

/*
===============================================
================= get data with name ================
===============================================
*/
function get_data_with_name($table){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table ORDER BY id DESC LIMIT 1");
    $stmt->execute(array());
    $data = $stmt->fetch();
    return $data;

}

?>