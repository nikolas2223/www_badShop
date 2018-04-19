<?
include 'functions_db.php';
include 'cart_functions.php';
    $name = $_GET["newtype"];
    $id = $_GET["INDtype"];
    db_connect();
    $query = mysql_query ("INSERT INTO categories(name,cat_id) VALUES('$name','$id')");
    header ('Location: admin.php');
?>