<?php
	$link=mysqli_connect("localhost","root","","Assignment");
	
	if($link==false)
	{
		die("Could not connect").mysqli_connect_error();
	}
	
	else
	{
		$sql="Create table blog(user varchar(255),blogTitle varchar(255))";
		
		if(mysqli_query($link,$sql))
		{
			echo 'Table created successfully';
		}
		
		else
		{
			echo 'error while creating table'.mysqli_error();
		}
	}
?>