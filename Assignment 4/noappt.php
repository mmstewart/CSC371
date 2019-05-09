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
   <center><?php session_start(); echo "Your appointment will be on {$_SESSION['date']}";?></center>
   <br>
   <br>
   <center><?php $advisor = $_POST['select']; echo "Your advisor is $advisor.";?></center>
   <center>Advisor/Lecturer</center>
   <center>Office located in the Quentin Burdick Building, room 258 B7</center>
   <br>
   <br>
   <center><?php session_start(); echo "You cannot make another appointment, please return home.";?></center>
   <center><a href="betweenDates.php">View your appointment date</a></center>
   <br>
</body>
<?php 
    include ( 'includes/footer.html' ) ; 
?>
</html>