<?php
	if(!isset($_COOKIE["session"]))
	{
		header("location: /Login/index.php?Redirect=NotLoggedIn");
	}
	
?>

<!DOCTYPE html>

<!-- New Post Page -->

<html>
<head>
	<title>Home</title>
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
		<li><a href="/index.php" class="current">Home (New Post)</a></li>
		<li><a href="/Login/index.php">Login/Register</a></li>
	</ul>
</div>
<div class="main">
	<br>
	<h1 style="text-align: center;">New Post</h1>
	<p style="text-align: center;">Make a new post to upload to the site</p>
	<br></br>
	<div class="main2" style="margin-top: -20px;">
		<ul class="ulhome">
			<form method= "post" action="post.php">
				<p style="padding-right: 10px;">Title:</p><input type="text" required name="TextBoxPostTitle"></input>
				<p style="padding-left: 30px; padding-right: 10px;">Subtitle:</p><input type="text" required name="TextBoxPostSubtitle"></input>
				<br>
				<p style="padding-left: 30px; padding-right: 10px;">Text:</p><input type="text" required name="TextBoxPostText"></input>
				<br></br>
				<button type="submit" style="padding: 5px; padding-left: 20px; padding-right: 20px; font-family: 'Montserrat', sans-serif;">Submit Post</button>
				<br>
				<br></br>
			</form>
		</ul>
		<br>
	</div>
</div>
<br>

</body>


</html>
