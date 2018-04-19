<?php
include 'functions_db.php';
include 'cart_functions.php';
$id=$_GET['id'];
$add_item =add_to_cart($id);
header ('Location: product.php ? id='.$id);
?>