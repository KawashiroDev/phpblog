<?php
	
	if ($_COOKIE['session'] == $_GET['User'] || $_COOKIE['session'] == "Admin")
	{
		include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
		$user = $_GET['User'];
		$SQL = "DELETE FROM UserPosts WHERE ID=".$_GET['ID']." AND UserPosted='$user'";
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



