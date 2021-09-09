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

<!------------contact us------------------>

	<div class="container">
	
	<div class="c-container">
		<center>
			<h1 style="margin-bottom: 10px;">Contact Us</h1>
			<p style="margin-bottom: 100px">We would like to response your queries and help you succeed.<br>Feel free to get in touch with us.</p>
		</center>
		<div class="c-box" style="border: 1px solid #ccc; box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);">
			<div class="c-left">
				<h3>Send your message</h3>

				<form action="" method="POST">
					<div class="i-row">
						<div class="i-group">
							<label>Name</label>
							<input type="text" placeholder="Enter your name" required="">
						</div>
						<div class="i-group">
							<label>E-mail</label>
							<input type="email" placeholder="Enter your email" required="">
							
						</div>
					</div>

					<div class="i-row">
						<div class="i-group">
							<label>Phone</label>
							<input type="text" placeholder="Enter your phone" required="">
						</div>
						<div class="i-group">
							<label>Subject</label>
							<input type="text" placeholder="Subject" required="">
							
						</div>
					</div>

					<label>Message</label>
					<textarea rows="5" placeholder="Message" required=""></textarea>
					<button type="submit" name="send">Send</button>									
				</form>

				<?php 
						include_once("connection.php");
						if(isset($_POST['send']))
						{
				?>
						<script>
            				window.alert("Thanks for your message");
        				</script>
						<meta http-equiv="refresh" content="0;url=contact.php" />
				<?php
						}
				?>

			</div>
			<div class="c-right" style="background: rgb(240, 240, 245);">
				<h3>Connect with us</h3>

				<table>
					<tr>
						<td><img src="Images/email.png" width="25px"></td>
						<td><b>Email :</b></td>
						<td>shopnow@gmail.com</td>
					</tr>
					<tr>
						<td><img src="Images/call.png" width="25px"></td>
						<td><b>Phone :</b></td>
						<td>011-123-4567</td>
					</tr>
					<tr>
						<td><img src="Images/location.png" width="25px"></td>
						<td style="padding-right: 20px;"><b>Address :</b></td>
						<td>201 - 1st floor, Lajpat Nagar, <br>New Delhi - 110024</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	</div>




<!----footer--->

	<div class="footer" style="margin-top: 120px;">
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