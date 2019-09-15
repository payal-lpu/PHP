<?php
	$link=mysqli_connect("localhost","root","");
	
	if($link==false)
	{
		die("Could not Connect").mysqli_connect_error();
	}
	
	else
	{
		echo "Connection established successfully<br>";
		$sql="Create DataBase Assignment";
		
		if(mysqli_query($link,$sql))
		{
			echo "<br>Database Created Successfully";
		}
		
		else
		{
			echo 'Error while creating database'.mysqli_error();
		}
	}
?>