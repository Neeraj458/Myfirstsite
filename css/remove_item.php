<?php
    include_once("connection.php");
    session_start();
    $item_id=$_GET['id'];
    $user_email=$_SESSION['email'];
    $delete_query="delete from users_items where item_id='$item_id' and email='$user_email'";
    $delete_query_result=mysqli_query($mysqli,$delete_query) or die(mysqli_error($mysqli));
    header('location: cart.php');




?>