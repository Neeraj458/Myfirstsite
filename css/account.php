
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
						<li><a href="contact">Contact</li></a>
						
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



<!-------my account-------->

	<div class="myaccount">
		<div class="container">
			<div class="row">
				<div class="forms">
					<div class="formbtn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="line">
					</div>

					<form id="login" action="login.php" method="POST">
						<input type="text" name="uemail" placeholder="Email">
						<input type="password" name="upassword" placeholder="Password">
						<button type="submit" name="log" class="button">Login</button>
						<p style="padding-top: 30px">Don't have an account yet?</p><br>
						<p>&nbsp;&nbsp;Register &#8594;</p>
					</form>

					
					<form id="register" action="account.php" method="POST">
						<input type="email" name="email" placeholder="Enter your email" required="">
						<input type="text" name="phone" placeholder="Enter phone" required="">
						<input type="password" name="password" placeholder="Enter your password" required="">
						<b><p style="font-size: 11px; margin-bottom: 20px; ">Password must be atleast 8 characters</p></b>
						<button type="submit" name="submit" class="button">Register</button>
						<p style="padding-top: 30px">Already have an account?</p><br>
						<p> &#8592; Login</p>
					</form> 


					<?php 
						include_once("connection.php");
						if(isset($_POST['submit']))
						{
							$e=$_POST['email'];
							$ph=$_POST['phone'];
							$p=$_POST['password'];	

							

							//query for email or phone already exists

							$user_exists_query="select * from register where email='$_POST[email]' or phone='$_POST[phone]'";
							$res=mysqli_query($mysqli,$user_exists_query);
							if(mysqli_num_rows($res)>0)
							{
								$result_fetch=mysqli_fetch_assoc($res);
								if($result_fetch['email']==$_POST['email'])
								{
					?>
									<script>
            							window.alert("Email already exists");
        							</script>
									<meta http-equiv="refresh" content="0;url=account.php" />
					<?php
								}
								else{
					?>
									<script>
            							window.alert("Phone number already exists");
        							</script>
									<meta http-equiv="refresh" content="0;url=account.php" />
					<?php
								}
								
							}
							//query to insert data in database
							else{
									if(strlen($_POST['phone'])<10)
									{
					?>
										<script>
		            						window.alert("Please enter a valid number");
		        						</script>
		        	<?php
									}

									else if(strlen($_POST['password'])<8)
									{
					?>
										<script>
		            						window.alert("Password should have atleast 8 characters");
		        						</script>
		        	<?php
									}

									else
									{
										$result=mysqli_query($mysqli,"insert into register(email,phone,password) values('$e','$ph','$p')");
					?>
										<script>
		            						window.alert("Registered successfully");
		        						</script>
										<meta http-equiv="refresh" content="0;url=index.php" />

					<?php

										$_SESSION['email']=$e;
									}
										
							
								}
						}	
					?>							

				</div>
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




	<!----script for form---->

	<script>
		var ulogin = document.getElementById("login");
		var uregister = document.getElementById("register");
		var uline = document.getElementById("line");
		
		

		function login()
		{
			uregister.style.transform = "translateX(420px)";
			ulogin.style.transform = "translateX(435px)";
			line.style.transform = "translateX(25px)";
			
		}

		function register()
		{
			uregister.style.transform = "translateX(0px)";
			ulogin.style.transform = "translateX(0px)";
			line.style.transform = "translateX(232px)";

		}
	</script>


</body>
</html>