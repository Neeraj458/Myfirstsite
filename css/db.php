<?php
	$servername="localhost";
	$username="root";
	$password="";


//create connection 

	$conn=new mysqli($servername,$username,$password);

//check connection

	if($conn -> connect_error)
	{
		die("connection failed :" . $conn -> connect_error);
	}

//create database

	/*$sql="create database shop_now";
	if($conn -> query($sql)===true)
	{
		echo "Database created succesfully";
	}
	else{
		echo "Error ".$conn->error;
	}*/

//create table

	$db="shop_now";
	$connect=mysqli_connect($servername,$username,$password,$db);

	if(!$connect)
	{
		die("connection failed :".mysqli_connect_error());
	}

	/*$sql="create table register(id int(5) AUTO_INCREMENT PRIMARY KEY,email varchar(30), phone varchar(10) NOT NULL, password varchar(30))";

	

	if(mysqli_query($connect,$sql))
	{
		echo "Table created successfully";
	}
	else{
		echo "error :".mysqli_error($connect);
	}
	



	$sq="create table items(id int(5) PRIMARY KEY, item_name varchar(50),item_price int(20))";
	if(mysqli_query($connect,$sq))
		{
			echo "Table created successfully";
		}
		else{
			echo "error :".mysqli_error($connect);
		}*/


	
	//$s="insert into items values(1,'Mens T-Shirt',395)";
	//$s="insert into items values(2,'Mens Stretch Slim jeans',759)";
	//$s="insert into items values(3,'United Jeans Mens Blue Dori Style',599)";
	//$s="insert into items values(4,'Mens Regular Fit Casual Check Shirt',630)";
	//$s="insert into items values(5,'ASIAN Mens Sports Running Shoes',799)";
	//$s="insert into items values(6,'Mens Shoes for Running, Walking, Gym',459)";
	//$s="insert into items values(7,'T-Rock Mens Running Shoe',399)";
	//$s="insert into items values(8,'Mens Airsocks Black Red Knitted Sports Shoes',664)";
	//$s="insert into items values(9,'RUSTET Analouge Mens Day and Date Watch',375)";
	//$s="insert into items values(10,'TIMEWEAR Stainless Steel Chain Watch for Men',329)";
	//$s="insert into items values(11,'TIMEX Anolog Black Mens Watch',1095)";
	//$s="insert into items values(12,'TIMEWEAR Commando Series Watch for Men',659)";
	$s="insert into items values(13,'Mi Smart Band 5',2499)";


	if(mysqli_multi_query($connect,$s))
		{
			echo "data inserted successfully";
		}
		else{
			echo "error :".mysqli_error($connect);
		}



/*	$sl="create table users_items(id int(5) AUTO_INCREMENT PRIMARY KEY, user_id int(5), item_id int(5))";
	if(mysqli_multi_query($connect,$sl))
		{
			echo "successfully";
		}
		else{
			echo "error :".mysqli_error($connect);
		}  */


/*	$al="alter table users_items add foreign key(user_id) references register(id)";

	if(mysqli_multi_query($connect,$al))
		{
			echo "successfull";
		}
		else{
			echo "error :".mysqli_error($connect);
		}	*/


/*	$alt="alter table users_items add foreign key(item_id) references items(id)";

	if(mysqli_multi_query($connect,$alt))
		{
			echo "successfull";
		}
		else{
			echo "error :".mysqli_error($connect);
		}	*/


	/*$new_col="alter table users_items add email varchar(50)";
	if(mysqli_multi_query($connect,$new_col))
		{
			echo "successfull";
		}
		else{
			echo "error :".mysqli_error($connect);
		}*/
		mysqli_close($connect);

?>