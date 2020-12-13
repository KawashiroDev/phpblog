<?php

	$PostTitle = $_POST['TextBoxPostTitle'];
	$PostSubtitle = $_POST['TextBoxPostSubtitle'];
	$PostText = $_POST['TextBoxPostText'];
	
	if ($_COOKIE['session'] == $_GET['User'] || $_COOKIE['session'] == "Admin")
	{
		include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
		$user = $_GET['User'];
		$SQL = "UPDATE UserPosts SET Title = '$PostTitle', Subtitle = '$PostSubtitle', Text = '$PostText' WHERE ID=".$_GET['ID']." AND UserPosted='$user'";
		if(mysqli_query($Conn, $SQL))
		{
			header("location: /index.php");
		}
	}
	else
	{
		header("location: /index.php");
	}
?>




