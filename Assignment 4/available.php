<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="backgroundColor.css">
<link rel="stylesheet" type="text/css" href="search.css">
<title>Untitled Document</title>
</head>

<body>
<?php 

include ( 'includes/header.html' ) ;    

?>
<form action="confirmation.php" method="post">
<div class="left"><a href="home.php">Return home</a></div>
<div class="right"><?php session_start() ;  echo "Logged in as: {$_SESSION['first_name']} {$_SESSION['last_name']}"; ?></div>
<br>
<div class="right"><a href="logout.php">Logout</a></div>
<br />
<br />
<?php
	session_start();
	$_SESSION['date'] = $_POST['date'];
	echo "<center><h4>Your appointment with Joan Krush will be on {$_SESSION['date']}</h4></center>";
?>
<br />
<br />
<br />
<center><b>Reason for your meeting</b></center>
<br />
<center><textarea rows="10" cols="75" name="reason" placeholder="Please enter a description on why you are meeting with your advisor." required></textarea></center>
<br />
<br />
<center><input type="submit" value="Submit"></center>
</form>
<?php 
    include ( 'includes/footer.html' ) ; 
?>
</body>
</html>