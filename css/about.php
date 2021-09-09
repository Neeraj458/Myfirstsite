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


<!------about------>
	<div class="container" style="background: radial-gradient(#fff,#ffd6d6);">
		<center><h1>About us</h1></center>
		<div class="content" style="padding-top: 50px; padding-bottom: 60px; text-align: justify;">
			<p>
			Shoppers Stop is home to a multitude of leading international and national brands for apparels, fragrances, accessories, cosmetics, footwear, home décor and furnishings catering to the needs of the entire family. We aspire to provide our customers a memorable international shopping experience. We are one of the largest chain of department stores across India.
			<br><br>
			<h2>Our Vision Is,</h2>
			<br>
				<i>“To be an inspirational and trusted brand, transforming customers' lives through fashion and delightful shopping experience every time”</i>
			<br><br><br><br>
				<h2>WHY SHOP WITH US</h2>
			<br><br>
				<h3>SIMPLE SHOPPING</h3>
				Whether you shop online or in store or any of the leading third party marketplaces you get the same experience in terms of merchandise, price & service.
				<br><br><br>
				<h3>SECURE SHOPPING</h3>
				Shopping on our website is 100% safe and secure as we do not store complete details or payment information of your credit/debit card in our system. This is information is directly transmitted securely to the bank for payment processing. However, caution must always be taken by the customer while making transactions on any online venue.
				<br><br><br>
				<h3>RANGE OF PRODUCTS AND BRANDS</h3>
				We assort the collection from the best brands, trends, colours, fabrics, patterns to bring you a deep fashion selection.
				<br><br><br>
				<h3>FREE RETURNS</h3>
				At Shoppers Stop we follow a policy that is – "We are responsible for what we sell". We offer free and easy returns on most of the merchandise bought online. If you are not completely satisfied with your purchase you can return the items via a courier pick up or exchange them in any of our stores across India.
				<br><br><br>
				<h3>100% ORIGINAL</h3>
				We are responsible for what we sell and guarantee the originality of the products. All our products are sourced directly from the brands and carry brand warranty and genuineness certificate.
				<br><br><br>
				<h3>FREE ALTERATIONS</h3>
				We offer free alteration at any Store for products purchased on online as well.
				<br><br><br>
				<h3>EXPRESS STORE PICK UP</h3>
				We provide the facility of express pick up service at the store. You can shop online and collect your order from the nearest or preferred Shoppers Stop store as per your convenience.
				<br><br><br>
				<h3>PERSONALIZED SHOPPING AT STORE</h3>
				We offer personal shopper service with prior appointment at our store. You can avail the assistance of personal shoppers who are experts to guide you to shop in an exclusive lounge at the store.
				<br><br><br>
				<h3>PERSONAL SHOPPER SERVICE AT HOME</h3>
				We also provide Personal Shopper At Home service and you can shop from the comforts of your home with prior appointment with assistance from our personal shoppers.
				<br><br><br>
				<h3>PERSONALIZED SHOPPING GUIDE</h3>
				We provide personalized shopping assistance by following our Style Hub which is curated with latest fashion trends and suggestions.
			</p>
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