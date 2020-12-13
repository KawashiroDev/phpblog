<!DOCTYPE html>

<!-- Login/Register Page -->

<html>
<head>
	<title>Login/Register</title>
	<link rel="stylesheet" type="text/css" href="/CSS/CSS.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<meta charset="UTF-8">
</head>

<body>
<div class="header">
	<ul>
		<img src="/Images\Website Logo.png" width=50px height=50px></img>
		<h1>Kawashiro Blog</h1>
	</ul>
</div>
<div class="header">
	<ul>
		<li><a href="/index.php">Home</a></li>
		<li><a href="/Login/index.php" class="current">Login/Register</a></li>
	</ul>
</div>
<div class="main">
	<br>
	<h1 style="text-align: center;">Login/Register</h1>
	<p style="text-align: center;">
	<?php
		$Redirect = $_GET["Redirect"];
		if($Redirect == "NotLoggedIn")
		{
			echo"You need to be logged in to make changes/entries to the blog page.";
		}
		else
		{
			echo"You can either log in if you already have an account, or register if you don't have an account yet.";
			echo"<br></br>";
			echo"(If you make an account, you will be able to make entries to the website)";
		}
	?>
	</p>
	<br>
	<div class="main1">
		<ul class="ulhome">
			<li class="image">
				
				<!-- Login Section -->
				
				<p>Login</p>
				<form method = "post" action="login.php">
				<p style="padding-right: 10px;">User Name:</p><input type="text" required name="TextBoxUserNameLogin"></input>
				<p style="padding-left: 30px; padding-right: 10px;">Password:</p><input type="password" required name="TextBoxUserPasswordLogin"></input>
				<br></br>
				<button type="submit" style="padding: 5px; padding-left: 39px; padding-right: 39px; font-family: 'Montserrat', sans-serif;">Login</button>
				<br>
				<?php
					$LoginStatus = $_GET["LoginStatus"];
					if($LoginStatus == "IncorrectUsername")
					{
						echo"</br>";
						echo"Incorrect username or password";
					}
				?>
				<br></br>
				</form>
				
			</li>
		</ul>
	</div>
	<div class="main1">
		<ul class="ulhome">
			<li class="image">	
				
				<!-- Register Section -->
				
				<p>Register (and log in)</p>
				<form method = "post" action="register.php">
				<p style="padding-right: 10px;">User Name:</p><input type="text" required name="TextBoxUserNameRegister"></input>
				<p style="padding-left: 30px; padding-right: 10px;">Password:</p><input type="password" required name="TextBoxUserPasswordRegister"></input>
				<br></br>
				<button type="submit" style="padding: 5px; padding-left: 30px; padding-right: 30px; font-family: 'Montserrat', sans-serif;">Register</button>
				<br>
				<?php
					$RegisterStatus = $_GET["RegisterStatus"];
					if($RegisterStatus == "UsernameTaken")
					{
						echo"</br>";
						echo"Username already taken. Please register again with a different name";
					}
				?>
				<br></br>
				</form>
				
			</li>
		</ul>
	</div>
</div>

</body>


</html>
