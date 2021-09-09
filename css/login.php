<?php
	session_start();
	include_once("connection.php");


	if(isset($_POST['log']))
	{
		$useremail=$_POST['uemail'];
		$userpass=$_POST['upassword'];

		
		$result=mysqli_query($mysqli,"select * from register where email='$useremail' and password='$userpass' ");

		if(mysqli_num_rows($result)==1)
		{
			
			
			$_SESSION['email']=$useremail;
			header('location: index.php');
		}
		else
		{
			
?>
       		<script>
            	window.alert("Wrong username or password");
        	</script>
			<meta http-equiv="refresh" content="0;url=account.php" />

<?php
		}

	}

?>


