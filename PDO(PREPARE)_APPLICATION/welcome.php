<?php

session_start();

session_regenerate_id( true );
include("connection.php");
error_reporting(0);
//echo "Welcome ".$_SESSION['user_name'];
$userprifile = $_SESSION['username'];

if ($userprifile==true) {
	
}
else
{
	header('location:signin.php');
}
//echo $result['picsource'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
</head>

<style>
	a{
		background: linear-gradient(-100deg, #ff8e47, #ff2ced);
		padding: 10px;
		letter-spacing: 5px;
		text-decoration: none;
		 font-weight: bold;
       color: #fff;
       box-shadow: 0px 0px 7px 4px skyblue;
	}
	a:hover{
  background: linear-gradient(-100deg, #ff2ced, #ff8e47);
}
</style>

<body>

<center>
<h1><?php echo "Welcome ".$_SESSION['username']; ?></h1>
<br><br>
<h3> !!! LOGIN SUCCESSFUL !!! </h3>
<br>
<br>
<a href="logout.php">LOGOUT</a>

<h4>

<li>This is Protected for <b>SQL INJECTION</li>
<li> use to PDO(<i>php data object</i>)</li>
<li>use <b>PREPARE STATEMENT<b></li>
</h4>
</center>
</body>
</html>