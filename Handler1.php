<?
include 'functions_db.php';
include 'cart_functions.php';
    $name = $_GET["name"];
    $price = $_GET["price"];
    $description = $_GET["description"];
    $image = $_GET["image"];
    $category = $_GET["category"];
    db_connect();
    $query = mysql_query ("INSERT INTO products(name,price,description,image,category) VALUES('$name','$price','$description','$image','$category')");
?>