<?php
include 'functions_db.php';
include 'cart_functions.php';
$id=$_GET['id'];
$add_quantity =add_quantity($id);
header ('Location: basket.php');
?>