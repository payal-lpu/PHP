<?php
	$link=mysqli_connect("localhost","root","","Assignment");
	
	if($link==false)
	{
		die("Could not connect").mysqli_connect_error();
	}
	
	else
	{
		$sql="insert into user values('payal','payal123'),('tisha','tisha123')";
		
		if(mysqli_query($link,$sql))
		{
			echo 'Values Inserted successfully';
		}
		
		else
		{
			echo 'error while inserting the values in the table'.mysqli_error();
		}
	}
?>