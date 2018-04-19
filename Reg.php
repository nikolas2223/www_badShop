<?
include 'functions_db.php';
include 'cart_functions.php';
session_start();
    $name = $_GET["mail"];
    $password = $_GET["pwd"];
    db_connect();
    $query = mysql_query ("INSERT INTO auth(Login,Password,Access) VALUES('$name','$password','Клиент')");
    $_SESSION['authid']=0;
        header ('Location: index.php');
?>