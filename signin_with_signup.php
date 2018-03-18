<?php 
	$user_type = $_GET['user_type'];
?>
<html>
	<head>
		<title>Respondent</title>
		<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet"> 
		<style type="text/css">
			html { 
					background: url(bg.jpg) no-repeat center center fixed;
  					-webkit-background-size: cover;
  					-moz-background-size: cover;
  					-o-background-size: cover;
  					background-size: cover;
				}
			html, body {
    			height: 100%;
			}
			html {
    			display: table;
    			margin: auto;
			}
			body {
				text-align: center;
    			display: table-cell;
    			vertical-align: middle;
			}

			a:link, a:visited {
				color: white;
				text-decoration: none;
			}

		</style>
	</head>

	<body style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #FFFFFF;"> Swachh KGP<br/><br/>
	<br><br>
	<center>
		<h3 style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #FFFFFF;">Already Registered?</h3>
		<form action = "login_db.php?user_type=<?php echo $user_type ?>" method = "POST">
			<input name = "email" placeholder = "Email"><br><br>
			<input name = "password" type = "password" placeholder = "Password"><br><br>
			<button type = "submit">Submit</button>
		</form>
		<a href = signup.php style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #FFFFFF'">not a registered user?</span>
		<p hidden style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #FFFFFF;"> Invalid credentials </p>
	</center>
</html>