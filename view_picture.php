<?php 
	$cid = $_GET['cid'];
	$id = $_GET['id'];
	$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$report = "SELECT Photo_pointer1 FROM Complaint WHERE Complaint_ID = '$cid'";
	$result = mysqli_query($con,$report);
	$row = $result->fetch_assoc();
	//header("Content-type: image/jpg"); 
	//echo $row['Photo_pointer1'];
    echo '
	<img src="data:image/jpeg;base64,'.base64_encode($row['Photo_pointer1']).'"  alt="Smiley face" height="500" /> 
	';
?>

<html>
	<head>
		<title>solved complaints</title>
		<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet"> 
		<style type="text/css">
			html { 
					background: url(back.jpg) no-repeat center center fixed;
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
			div {
				width: 1000px;
				padding: 20px;
				border: 5px solid gray;
				margin: 0;
			}
			.button {
				background-color: #14d18c; /* Green */
				border: none;
				color: black;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			.right {
				position: relative;
				right: 0px;
				left : 300px;
				width: 500px;
				padding: 0px;
			}
			table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}

			td, th {
				border: 1px solid #000000;
				text-align: left;
				padding: 8px;
			}

			tr:nth-child(even) {
				background-color: #dddddd;
			}

		</style>
	</head>

	<body>
	<center>
		<button class="button" onclick="document.location.href='respondent_homepage.php?id=<?php echo $id ?>'">Back
		</button>
	</center>
</html>
