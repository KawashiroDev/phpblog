<?php
	if(!isset($_COOKIE["session"]))
	{
		header("location: /Login/index.php?Redirect=NotLoggedIn");
	}
	
	include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
	$SQL = "SELECT * FROM UserPosts WHERE ID = ".$_GET['ID'];
	$RESULT = mysqli_query($Conn, $SQL);
	while($Row=mysqli_fetch_array($RESULT))
	{
		$PostTitle = $Row['Title'];
		$PostSubtitle = $Row['Subtitle'];
		$PostText = $Row['Text'];
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
		<li><a href="/index.php" class="current">Home (Edit Post)</a></li>
		<li><a href="/Login/index.php">Login/Register</a></li>
	</ul>
</div>
<div class="main">
	<br>
	<h1 style="text-align: center;">Edit Post</h1>
	<p style="text-align: center;">Edit your already existing post to be changed on the site</p>
	<br></br>
	<div class="main2" style="margin-top: -20px;">
		<ul class="ulhome">
			<form method= "post" action="/postmodify.php?ID=<?php echo $_GET['ID'] ?>&User=<?php echo $_GET['User'] ?>">
				<p style="padding-right: 10px;">Title:</p><input type="text" required name="TextBoxPostTitle" value="<?php echo $PostTitle ?>"></input>
				<p style="padding-left: 30px; padding-right: 10px;">Subtitle:</p><input type="text" required name="TextBoxPostSubtitle" value="<?php echo $PostSubtitle ?>"></input>
				<br>
				<p style="padding-left: 30px; padding-right: 10px;">Text:</p><input type="text" required name="TextBoxPostText" value="<?php echo $PostText ?>"></input>
				<br></br>
				<button type="submit" style="padding: 5px; padding-left: 20px; padding-right: 20px; font-family: 'Montserrat', sans-serif;">Submit Edits</button>
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
