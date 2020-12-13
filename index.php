<!-- Check if the user has a login cookie or not -->
<?php
	if(!isset($_COOKIE["session"]))
	{
		header("location: /Login/index.php?Redirect=NotLoggedIn");
	}
	
?>

<!DOCTYPE html>

<!-- Home Page -->

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
		<li><a href="/index.php" class="current">Home</a></li>
		<li><a href="/Login/index.php">Login/Register</a></li>
	</ul>
</div>
<div class="main">
	<br>
	<h1 style="text-align: center;">Home</h1>
	<p style="text-align: center;">Blog entries should appear here</p>
	<form action="/NewPost/index.php">
	<p style="text-align: center;"><button type="submit" style="padding: 5px; padding-left: 30px; padding-right: 30px; font-family: 'Montserrat', sans-serif;">Make New Post</button></p>
	</form>
	<br>
	<div class="main2" style="margin-top: -20px;">
		<ul class="ulhome">

			<?php
				include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
				$SQL = "SELECT * FROM UserPosts";
				$RESULT = mysqli_query($Conn, $SQL);
				while($Row = mysqli_fetch_array($RESULT))
				{
					echo "
						<h1>".$Row['Title']."</h1>
						<h2 style='color: #666666;'>".$Row['Subtitle']."</h2>
						<p style='margin-top: 0px; color: #888888;'>".$Row['UserPosted'].", </p>
						<p style='margin-top: 0px; color: #888888;'>".$Row['Date']."</p>
						<br>
						<p>".$Row['Text']."</p>
						<br>
						<button onclick='location.href=`/EditPost/index.php?ID=".$Row['ID']."&User=".$Row['UserPosted']."`;' style='padding: 5px; padding-left: 20px; padding-right: 20px; margin-left: -5px; font-family: 'Montserrat', sans-serif;'>Edit Post</button>
						<button onclick='location.href=`/postdelete.php?ID=".$Row['ID']."&User=".$Row['UserPosted']."`;' type='submit' style='padding: 5px; padding-left: 15px; padding-right: 15px; font-family: 'Montserrat', sans-serif;'>Delete Post</button>
						<br></br>
						<hr>
					";
				}
			?>
		</ul>
		<br>
	</div>
</div>
<br>

</body>


</html>
