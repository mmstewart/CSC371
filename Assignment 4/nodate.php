<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appointment Information</title>
<link rel="stylesheet" href="backgroundColor.css">
<link rel="stylesheet" type="text/css" href="search.css">
</head>

<body>
<?php 

include ( 'includes/header.html' ) ;    

?>
   <div class="left"><a href="home.php">Return home</a></div>
   <div class="right"><a href="logout.php">Logout</a></div>
   <center><?php session_start(); echo "You have no appointment, click on the 'Return home' link on the left or 'Add an appointment' link below to add an appointment.";?></center>
   <br>
   <br>
   <center><a href="home.php">Add an appointment</a></center>
</body>
<?php 
    include ( 'includes/footer.html' ) ; 
?>
</html>