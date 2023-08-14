<link rel="stylesheet" href="./Css/bootstrap.min.css">
<?php 
session_start();
require_once("connect_db.php");
require("./includes/function/function.php");



if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $image   = filter_var($_POST['image'],FILTER_SANITIZE_STRING);
    $price  = filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_INT);
    

    add($image,$price,'sports_book');
  }

?>


<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="w-75 m-auto">
<div class="container mt-5">
<div class="mb-3">
<label class="form-label">image</label>
<input type="text" name="image" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">price</label>
<input type="number" name="price" class="form-control">
</div>

<button type="submit" class="btn btn-primary">add</button>
</div>
</form>