<?php
session_start();
include 'functions_db.php';
include 'cart_functions.php';
    $name = $_GET["mail"];
    $password = $_GET["pwd"];
    db_connect();
    $query= ("SELECT Access FROM auth WHERE Login='$name' AND Password='$password'");
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $access = $row['Access'];
    if($access=='Клиент')
    {
        $_SESSION['authid']=0;
        header ('Location: index.php');
    }
    else if ($access=='Менеджер')
    {
        $_SESSION['authid']=0;
        header ('Location: manager.php ');
    }
    else if ($access=='Администратор')
    {
        $_SESSION['authid']=0;
        header ('Location: admin.php');
    }
    else
    {
        header ('Location: index.php');
    }

?>