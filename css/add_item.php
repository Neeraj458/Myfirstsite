<?php
    include_once("connection.php");
    session_start();
    $item_id=$_SESSION['i_id'];  
    $user_email=$_SESSION['email'];
    $add_to_cart_query="insert into users_items(item_id,email) values ('$item_id','$user_email')";
    $add_to_cart_result=mysqli_query($mysqli,$add_to_cart_query) or die(mysqli_error($mysqli));                                    
    header('location: products.php');

?>