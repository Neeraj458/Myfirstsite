<?php
	session_start();
	include_once("connection.php");
	if(!isset($_SESSION['email']))
	{
        header('location: account.php');
    }

    $user_email=$_SESSION['email'];
    $user_products_query="select it.id,it.item_name,it.item_price from users_items ut inner join items it on it.id=ut.item_id where ut.email='$user_email'";


    $user_products_result=mysqli_query($mysqli,$user_products_query) or die(mysqli_error($mysqli));
    $no_of_user_products= mysqli_num_rows($user_products_result);

    $sum=0;
    if($no_of_user_products==0)
    {
        //Add items to cart first;
?>
        <script>
        	window.alert("No items in the cart!!");
        </script>
<?php
    }
    else
    {
        while($row=mysqli_fetch_array($user_products_result))
        {
            $sum=$sum+$row['item_price']; 
   		}
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SHOP NOW!</title>
	<link rel="stylesheet" href="style.css">


</head>
<body style="background: radial-gradient(#fff,#ffd6d6);">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<a href="index.php"><img src="Images/sn1.png" width="135px"></a>
				</div>

				<nav>
					<ul>
						<li><a href="index.php">Home</li></a>
						<li><a href="products.php">Products</li></a>
						<li><a href="about.php">About</li></a>
						<li><a href="contact.php">Contact</li></a>
					
						<?php
							if(isset($_SESSION["email"]))
							{
						?>								
								<li><a href="cart.php"><img src="Images/cart.png" width="14px" height="14px">cart</li></a>
								<li><a href="logout.php">Logout</li></a>
						<?php
							}
							else{
						?>
								<li><a href="account.php">My Account</li></a>
						<?php
							}
						?>
					</ul>
					
				</nav>
				
			</div>
			
		</div>


	<!-----------cart----------------->
	<div class="s-container" style="margin: 50px auto;">
		
			<table width="100%" style="border-collapse: collapse;">
				<tr style="background: #FC766AFF; color: #fff;">
					<th style="padding: 7px;">Item number</th>
					<th>Item name</th>
					<th>Item price</th>
					<th></th>
				</tr>
				<?php 
	                $user_products_result=mysqli_query($mysqli,$user_products_query) or die(mysqli_error($mysqli));
	                $no_of_user_products= mysqli_num_rows($user_products_result);
	                $counter=1;
                	while($row=mysqli_fetch_array($user_products_result))
                	{         
                ?>

                <tr style="background: rgb(240, 240, 245); border: 1px solid #ccc;">
                	<th style="padding: 5px;"><?php echo $counter ?></th>
                	<th><?php echo $row['item_name']?></th>
                	<th><?php echo $row['item_price']?></th>
                	<th style="text-color: blue"><a href="remove_item.php?id=<?php echo $row['id']?>"><font color="#097FC6">Remove</font></a></th>
                </tr>
                <?php $counter=$counter+1;
            		}
            	?>
                <tr>
                    <th></th>
                    <th style="padding: 6px;"><h3>Total</h3></th>
                    <th><h3>Rs <?php echo $sum;?>/-</h3></th>
                    <th><a href="success.php?id=<?php echo $user_email?>" ><font color="#097FC6">Confirm Order</font></a></th>
                </tr>


			</table>
		
	</div>

<!--#ff523b-->

	
</body>
</html>