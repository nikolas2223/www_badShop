<?php
session_start();
    function add_to_cart($id)
    {
        if(!isset($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id]=1;
            return true;  
        }
        else
        {
            $_SESSION['cart'][$id]=$_SESSION['cart'][$id]+1;
            return true;
        }
        return false;
    }
    
        function add_quantity($id)
    {
            $_SESSION['cart'][$id]=$_SESSION['cart'][$id]+1;
    }
    
        function delete_quantity($id)
    {
            $_SESSION['cart'][$id]=$_SESSION['cart'][$id]-1;
            if ($_SESSION['cart'][$id]==0)
            {
                unset ($_SESSION['cart'][$id]);
            }

    }

?>