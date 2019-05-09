<?php 

include ( 'includes/header.html' ) ;    


?>
<html>
<head>
<title>Advisor Info</title>
<link rel="stylesheet" href="backgroundColor.css">
<link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
        <div class="left"><a href="home.php">Return home</a></div>
        <div class="right"><?php session_start() ;  echo "Logged in as: {$_SESSION['first_name']} {$_SESSION['last_name']}"; ?></div>
        <br>
        <div class="right"><a href="logout.php">Logout</a></div>
        <br>
        <br>
        <center><?php $advisor = $_POST['select']; echo "Your advisor is $advisor.";?></center>
        <center>Advisor/Lecturer</center>
        <center>Office located in the Quentin Burdick Building, room 258 B7</center>
        <br>
        <br>
        <center><a href="selectappt.php">See Available Appointments</a></center>
    <?php 
    include ( 'includes/footer.html' ) ; 
?>
</body>
</html>