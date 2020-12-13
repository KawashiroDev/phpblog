<?php
	
	$UserName = $_POST['TextBoxUserNameRegister'];
	$UserPassword = $_POST['TextBoxUserPasswordRegister'];
	
	if(isset($_POST['TextBoxUserNameRegister']))
	{
		include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
		$SQL = "SELECT * FROM Users WHERE UserName = '$UserName'";
		$RESULT = mysqli_query($Conn, $SQL);
		$NUM = mysqli_num_rows($RESULT);
		if($NUM > 0)
		{
			header("location: /Login/index.php?RegisterStatus=UsernameTaken");
		}
		else
		{
			$INSERT = "INSERT INTO Users (UserName, Password) VALUES ('$UserName','$UserPassword')";
			if(mysqli_query($Conn, $INSERT))
			{
				setcookie("session", $UserName, 0, "/");
				header("location: /Login/index.php?RegisterStatus=Successful");
			}
		}
	}
	
?>


