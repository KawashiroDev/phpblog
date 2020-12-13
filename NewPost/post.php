<?php
	
	$PostTitle = $_POST['TextBoxPostTitle'];
	$PostSubtitle = $_POST['TextBoxPostSubtitle'];
	$PostText = $_POST['TextBoxPostText'];
	$PostUser = $_COOKIE['session'];
	$PostDate = date("Y-m-d");
	
	
	if(isset($_POST['TextBoxPostTitle']))
	{
		
		include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
		$SQL = "INSERT INTO UserPosts (Title,Subtitle,Text,UserPosted,Date) VALUES ('$PostTitle','$PostSubtitle','$PostText','$PostUser','$PostDate')";
		if(mysqli_query($Conn, $SQL))
		{
			echo"creams";
			header("location: /index.php");
		}
	}
	
?>


