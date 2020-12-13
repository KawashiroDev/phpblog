<?php
	
	$UserName = $_POST['TextBoxUserNameLogin'];
	$UserPassword = $_POST['TextBoxUserPasswordLogin'];
	
	if(isset($_POST['TextBoxUserNameLogin']))
	{
		include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
		$SQL = "SELECT * FROM Users WHERE UserName = '$UserName' AND Password = '$UserPassword'";
		$RESULT = mysqli_query($Conn, $SQL);
		$NUM = mysqli_num_rows($RESULT);
		if($NUM == 1)
		{
			setcookie("session", $UserName, 0, "/");
			header("location: /index.php");
		}
		else
		{
			header("location: /Login/index.php?LoginStatus=IncorrectUsername");
		}
	}
	
	
	
?>


