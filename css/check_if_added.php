<?php
    
    function check_if_added_to_cart($item_id)
    {
        //session_start();    
        include_once("connection.php");
        $user_email=$_SESSION['email'];
        $product_check_query="select * from users_items where item_id='$item_id' and email='$user_email' ";
        $product_check_result=mysqli_query($mysqli,$product_check_query) or die(mysqli_error($mysqli));
        $num_rows=mysqli_num_rows($product_check_result);
        if($num_rows>=1)return 1;
        return 0;
    }
?>