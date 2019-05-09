<link rel="stylesheet" href="backgroundColor.css">
<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ; 
include ( 'includes/header.html' ) ; 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Display body section.
echo "<center><h1>HOME</h1><p>You are now logged in, {$_SESSION['first_name']} {$_SESSION['last_name']}!</p></center>";
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
<form method="post" action="appointment.php">
    <div class="left"><a href="date.php">View your appointment date</a></div>
    <div class="right"><a href="logout.php">Logout</a></div>
    <br>
    <br>
    <br>
<center>
    <select name="select" id="soflow" required>
        <option selected disabled value="">Search for your advisor</option>
        <option>Joan Krush</option required>
    </select>
</center>
<br>
<br>
<center>
    <input type="submit" value="Select your Advisor">
</center>
</form>
<?php 
    include ( 'includes/footer.html' ) ; 
?>
</body>
</html>
