<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="imgs/images.jpeg" type="image/gif">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<?php 
session_start();
require_once("connect_db.php");
require("./includes/function/function.php");
$science_book = get_all_data('science_book');
$history_book = get_all_data('history_book');
$physics_book = get_all_data('physics_book');
$sports_book = get_all_data('sports_book');

?>

<h1>science book</h1>

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Image</th>
    <th scope="col">price</th>
    <th scope="col">Update</th>
    <th scope="col">Delete</th>
</tr>
</thead>
<tbody>

<?php foreach($science_book as $book){ ?>
<tr>
    <td><?php echo $book['id']?></td>
    <td><?php echo $book['image']?></td>
    <td><?php echo $book['price']?></td>
    <td><a class="btn btn-success" href="update_science.php?book_id=<?php echo $book['id']?>">Update</a></td>
    <td><a class="btn btn-danger" href="delete_science.php?book_id=<?php echo $book['id']?>">Delete</a></td>
</tr>
<?php } ?>

</tbody>
</table>
<a href="add_science.php" class="btn btn-outline-primary color-white m-3">Add New Book</a>
<br><br><br><br>
<hr>
<br><br><br><br>
<h1>physics book</h1>

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Image</th>
    <th scope="col">price</th>
    <th scope="col">Update</th>
    <th scope="col">Delete</th>
</tr>
</thead>
<tbody>

<?php foreach($physics_book as $book){ ?>
<tr>
    <td><?php echo $book['id']?></td>
    <td><?php echo $book['image']?></td>
    <td><?php echo $book['price']?></td>
    <td><a class="btn btn-success" href="update_physics.php?book_id=<?php echo $book['id']?>">Update</a></td>
    <td><a class="btn btn-danger" href="delete_physics.php?book_id=<?php echo $book['id']?>">Delete</a></td>
</tr>
<?php } ?>

</tbody>
</table>
<a href="add_physics.php" class="btn btn-outline-primary color-white m-3">Add New Book</a>
<br><br><br><br>
<hr>
<br><br><br><br>
<h1>history book</h1>

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Image</th>
    <th scope="col">price</th>
    <th scope="col">Update</th>
    <th scope="col">Delete</th>
</tr>
</thead>
<tbody>

<?php foreach($history_book as $book){ ?>
<tr>
    <td><?php echo $book['id']?></td>
    <td><?php echo $book['image']?></td>
    <td><?php echo $book['price']?></td>
    <td><a class="btn btn-success" href="update_history.php?book_id=<?php echo $book['id']?>">Update</a></td>
    <td><a class="btn btn-danger" href="delete_history.php?book_id=<?php echo $book['id']?>">Delete</a></td>
</tr>
<?php } ?>

</tbody>
</table>


<a href="add_history.php" class="btn btn-outline-primary color-white m-3">Add New Book</a>
<br><br><br><br>
<hr>
<br><br><br><br>
<h1>sports_book</h1>

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Image</th>
    <th scope="col">price</th>
    <th scope="col">Update</th>
    <th scope="col">Delete</th>
</tr>
</thead>
<tbody>

<?php foreach($sports_book as $book){ ?>
<tr>
    <td><?php echo $book['id']?></td>
    <td><?php echo $book['image']?></td>
    <td><?php echo $book['price']?></td>
    <td><a class="btn btn-success" href="update_sports.php?book_id=<?php echo $book['id']?>">Update</a></td>
    <td><a class="btn btn-danger" href="delete_sports.php?book_id=<?php echo $book['id']?>">Delete</a></td>
</tr>
<?php } ?>

</tbody>
</table>


<a href="add_sports.php" class="btn btn-outline-primary color-white m-3">Add New Book</a>

<a href="logout.php" class="btn btn-outline-warning color-white m-3 ms-auto">logout</a>

<script src="./Js/jquery-3.6.3.min.js"></script>
    <script src="./Js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="./Js/main.js"></script>
</body>

</html>