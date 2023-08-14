<link rel="stylesheet" href="./Css/bootstrap.min.css">
<?php 
session_start();
require_once("connect_db.php");
require("./includes/function/function.php");


    $id=$_GET['book_id'];
    $data = get_book_with_id('sports_book',$id);


if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $image   = filter_var($_POST['image'],FILTER_SANITIZE_STRING);
    $price  = filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_INT);
    

    update_sports($image,$price);
  }

?>


<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="w-75 m-auto">
<div class="container mt-5">
  <div class="mb-3">
    <label class="form-label">image</label>
    <input type="text" value="<?php echo $data['image'];?>" name="image" class="form-control">
  </div>


  <div class="mb-3">
    <label class="form-label">price</label>
    <input type="number" name="price" value="<?php echo $data['price'];?>" class="form-control">
  </div>

 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>