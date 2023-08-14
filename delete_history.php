<?php
session_start();
require_once("connect_db.php");
require("./includes/function/function.php");
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['book_id'])){
        delete_with_id('history_book',$_GET['book_id']);
    }
}
