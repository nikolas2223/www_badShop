<?php

     function db_connect()
     {
        $host = 'localhost';
        $user = 'root';
        $password = 'Lemniskata 01';
        $db='shop';
        
        $connection = mysql_connect($host,$user,$password);
        mysql_set_charset('utf8',$connection);
        if(!$connection || !mysql_select_db($db,$connection))
        {
            return false;
        }
        return $connection;

     }
     
     function db_result_to_array($result)
     {
        $count=0;
        $res_array = array();
        while($row = mysql_fetch_array($result))
        {
            $res_array[$count]=$row;
            $count++;
        }
        return $res_array;
     }
     
     function get_products()
     {
        db_connect();
        
        $query = "SELECT * FROM products ORDER BY id DESC";
        
        $result = mysql_query($query);
        $result1 = db_result_to_array($result);
        return $result1;
     }
     
    function get_cat()
     {
        db_connect();
        
        $query = "SELECT * FROM categories ORDER BY id DESC";
        
        $result = mysql_query($query);
        $result1 = db_result_to_array($result);
        return $result1;
     }
     
     function get_cat_products($cat)
     {
        db_connect();
        
        $query = "SELECT * FROM products WHERE category='$cat' ORDER BY id DESC";
        
        $result = mysql_query($query);
        $result1 = db_result_to_array($result);
        return $result1;
     }

?>