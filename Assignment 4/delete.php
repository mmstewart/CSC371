<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NDSU Advisor Appointment</title>
<link rel="stylesheet" type="text/css" href="search.css">
<link rel="stylesheet" href="backgroundColor.css">
</head>
<?php 

include ( 'includes/header.html' ) ;    

?>
<div class="left"><a href="home.php">Return home</a></div>
<div class="right"><a href="logout.php">Logout</a></div>
	<center><?php


# Open database connection.
require ( 'connect_db.php' ) ;

// Read data from the form
session_start();

$fname =$_SESSION['first_name'];
$lname =$_SESSION['last_name'];
$username =$_SESSION['username'];
$userID =$_SESSION['user_id'];
$date = $_SESSION['date'];

//Use MySQL to Add data to the Table users

$query = "INSERT INTO users (user_id, username, first_name, last_name, reg_date) VALUES
 ('$userID', '$username', '$fname', '$lname', $date)";

//Run a query for your table - users - INSERT new data

if(!($result = mysqli_query($dbc,$query)))
{       print ("");
   // die(mysqli_error());
}

// show result
$query = "DELETE FROM users WHERE user_id = '$userID'";
//Run a query for your table - users - INSERT new data

if(!($result = mysqli_query($dbc,$query)))
{       print ("Couldn’t add new record! <br/>");
   // die(mysqli_error());
}



print "<table border>";
print "<tr><td>Student ID</td><td>First Name</td><td>Last Name</td><td>Username</td><td>Reason (Disclosed)</td><td>Date</td></tr>";
print '<br>';
for($c=0; $row=  mysqli_fetch_row($result); $c++)
{
    print("<tr>");
    foreach($row as $key => $value)
        print ("<td style=width:100px>$value</td>");
    print("</tr>");
    print '<br>';
}
print"</table>";

mysqli_close($dbc);  // close connection
?></center>
<?php 
    include ( 'includes/footer.html' ) ; 
?>

<body>
</body>
</html>