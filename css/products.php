<?php
	session_start();
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
	
	<div class="s-container">
		<h2 class="title">All Products</h2>
		<div class="row">
			<div class="col-4">
				<a href="pro1.php"><img src="Images/Campus sutra2.jpg" height="250px">
				<center><h4>Campus sutra</h4>
				<p>Solid Men Henley stylish</p>
				<p>Casual T-Shirt</p>
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9734;
				</div>
				<p>&#8377;395</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro2.php"><img src="Images/slim jeans2.jpg" height="250px">
				<center><h4>House & Shields</h4>
				<p>Men's Strech Slim Jeans</p>
				<br>
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9733;
				</div>
				<p>&#8377;759</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro3.php"><img src="Images/united jeans4.jpg" height="250px">
				<center><h4>United Jeans</h4>
				<p>Men's Blue Fit Cotton Jeans</p>
				<br>
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9734;
					&#9734;
				</div>
				<p>&#8377;599</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro4.php"><img src="Images/yha.jpg" height="250px">
				<center><h4>YHA</h4>
				<p>Men's Regular Fit Casual Check Shirts</p>	
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9734;
				</div>
				<p>&#8377;630</p></center></a>
			</div>
		</div>



		<!----second line---->

		<div class="row">
			<div class="col-4">
				<a href="pro9.php"><img src="Images/rustet3.jpg" height="250px">
				<center><h4>Rustet</h4>
				<p>Analogue Men's & Boy Day and Date Watch</p>
				
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9734;
				</div>
				<p>&#8377;375</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro10.php"><img src="Images/timewear.jpg" height="250px">
				<center><h4>TimeWear</h4>
				<p>Analog Day Date Functioning Stainless Steel Chain Watch</p>
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9734;
				</div>
				<p>&#8377;329</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro11.php"><img src="Images/timex2.jpg" height="250px">
				<center><h4>Timex</h4>
				<p>Analog Black Men Watch</p>
				<br>
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9733;
				</div>
				<p>&#8377;1095</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro12.php"><img src="Images/watch2.jpg" height="250px">
				<center><h4>TimeWear</h4>
				<p>Commando Series Analog Digital Multifunction Sports Watch</p>	
				<div class="rating">
					&#9733;
					&#9733;
					&#9734;
					&#9734;
					&#9734;
				</div>
				<p>&#8377;659</p></center></a>
			</div>
		</div>





		<!----third line---->
		<div class="row">
			<div class="col-4">
				<a href="pro5.php"><img src="Images/asian2.jpg" height="250px">
				<center><h4>Asian</h4>
				<p>Men's Kosco Sports Running Shoes</p>
				<br>
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9734;
				</div>
				<p>&#8377;799</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro6.php"><img src="Images/b.jpg" height="250px">
				<center><h4>Ethics</h4>
				<p>Men's Multicolored Shoes</p>
				<br>
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9734;
					&#9734;
				</div>
				<p>&#8377;459</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro7.php"><img src="Images/trock2.jpg" height="250px">
				<center><h4>T-Rock</h4>
				<p>Men's running shoe</p>
				<br>
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9734;
				</div>
				<p>&#8377;399</p></center></a>
			</div>
			<div class="col-4">
				<a href="pro8.php"><img src="Images/a.jpg" height="250px">
				<center><h4>Asian</h4>
				<p>Men's Airsocks-12 Black Red Knitte Sports Shoes</p>	
				<div class="rating">
					&#9733;
					&#9733;
					&#9733;
					&#9733;
					&#9733;
				</div>
				<p>&#8377;664</p></center></a>
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

</body>
</html>