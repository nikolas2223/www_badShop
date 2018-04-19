
<?php
include 'functions_db.php';
include 'cart_functions.php';
$id=$_GET['id'];
$cat = $_GET['catid'];
$add_item =add_to_cart($id);
header ('Location: cat.php ? catid='.$cat);
?>
