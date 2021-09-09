<?php
	session_start();
	include_once("check_if_added.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SHOP NOW!</title>
	<link rel="stylesheet" href="style.css">


</head>
<body>
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



<!----product details---->
		<div class="s-container" style="margin-top: 20px;">
			<div class="row">
				<div class="col-2" style="padding: 20px;">
					<img src="Images/trock2.jpg" width="100%" height="500px" style="padding: 0;" id="proimage">	

					<div class="simage">
						<div class="simage-col">
							<img src="Images/trock2.jpg" width="100%" class="smallimage">
						</div>
						<div class="simage-col">
							<img src="Images/trock3.jpg" width="100%" class="smallimage">
						</div>
						<div class="simage-col">
							<img src="Images/trock4.jpg" width="100%" class="smallimage">
						</div>
						<div class="simage-col">
							<img src="Images/trock5.jpg" width="100%" class="smallimage">
						</div>
						
					</div>				
				</div>
				<div class="col-2" style="padding: 20px;">
					<h2 style="padding-bottom: 20px;">T-Rock Men's Running Shoe</h2>
					<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9734;
				</div>
				
				<p style="padding-top: 8px;">&#8377;399.00</p>
				<hr>
				<h3 style="padding: 40px 0 15px">Product details</h3>
					<ul style="list-style-type: disc; padding-left: 16px;">
						<li style="padding-bottom: 4px;">Closure: slip on</li>
						<li style="padding-bottom: 4px;">Shoe widht: Medium</li>
						<li style="padding-bottom: 4px;">Light weight</li>
						<li style="padding-bottom: 4px;">Regular: Comfort</li>
						<li style="padding-bottom: 4px;">Closure: Slip on</li>
						<li style="padding-bottom: 4px;">Lifestyle: Sports shoes, Running shoes, casual shoes</li>
						<li style="padding-bottom: 4px;">Product colour may slightly vary due to photographic lighting sources or your monitor setting</li>
					</ul>
					<br><br><br><br><br>
					
					<?php

						if(!isset($_SESSION['email']))

						{
					?>
							<a href="account.php" class="button">Add to cart</a>
					<?php
						}
						else{
								if(check_if_added_to_cart(7))
								{
					?>
									<a href="">Added to cart</a>
					<?php
								}
								else
								{
					?>
									<a href="add_item.php" class="button">Add to cart</a>
					<?php
								}
								$_SESSION['i_id']=7;
							}
					?>
					
				</div>
			</div>
			
		</div>
	
	




<!----footer--->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer1">
					<h3>Download our App</h3>
					<div class="applogo">
						<a href=""><img src="Images/appstore.png"></a>
						<a href=""><img src="Images/Gplay.png"></a>
						<ul>
							<li>&nbsp;</li>
							<li>&nbsp;</li>
						</ul>
					</div>
				</div>
				<div class="footer2">
					<h3>Connect with us</h3>
					<ul>
						<li><a href="">Facebook</a></li>
						<li><a href="">Instagram</a></li>
						<li><a href="">Twitter</a></li>
						<li>&nbsp;</li>
						<li>&nbsp;</li>
					</ul>
				</div>
				
				<div class="footer3">
					<h3>Quick links</h3>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="account.php">My Account</a></li>
					</ul>
				</div>
			</div>
			<hr>
			<center><p class="copyright">&#169; 2021- SHOP NOW! | All Right Reserved</p></center>
		</div>
	</div>




	<!----script for product---->

	<script>
		var productimage = document.getElementById("proimage");
		var smallimg = document.getElementsByClassName("smallimage");

		smallimg[0].onclick = function() 
		{
			productimage.src = smallimg[0].src;
		}

		smallimg[1].onclick = function() 
		{
			productimage.src = smallimg[1].src;
		}

		smallimg[2].onclick = function() 
		{
			productimage.src = smallimg[2].src;
		}

		smallimg[3].onclick = function() 
		{
			productimage.src = smallimg[3].src;
		}
	</script>

</body>
</html>