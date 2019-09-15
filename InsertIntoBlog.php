<?php
	$link=mysqli_connect("localhost","root","","Assignment");
	
	if($link==false)
	{
		die("Could not connect").mysqli_connect_error();
	}
	
	else
	{
		$sql="insert into blog values('payal','HelloBlog'),('tisha','WelcomeBlog')";
		
		if(mysqli_query($link,$sql))
		{
			echo 'Values inserted successfully';
		}
		
		else
		{
			echo 'error while creating table'.mysqli_error();
		}
	}
?>