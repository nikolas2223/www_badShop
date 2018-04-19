<?
include 'functions_db.php';
include 'cart_functions.php';
session_start();
    $s_name = $_GET["s_name"];
    $name = $_GET["name"];
    $address = $_GET["address"];
    $tel_number = $_GET["tel_number"];
    foreach($_SESSION['cart'] as $id=>$quantity):
        $item=get_product($id);
    $query = mysql_query ("INSERT INTO orders(s_name,name,address,tel_number,product,prod_id,price,quantity) VALUES('$s_name','$name','$address','$tel_number','{$item['name']}','{$item['id']}','{$item['price']}','$quantity')");
    endforeach;
header ('Location: basket.php');
?>