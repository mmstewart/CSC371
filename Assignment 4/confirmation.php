<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="confirm.js"></script>
<link rel="stylesheet" href="backgroundColor.css">
<link rel="stylesheet" type="text/css" href="search.css">
<title>Email Confirmation</title>
</head>

<body>
<form method="post" action="email1.php"> 
<?php 

include ( 'includes/header.html' ) ;    

?>

   <div class="right"><?php session_start() ;  echo "Logged in as: {$_SESSION['first_name']} {$_SESSION['last_name']}"; ?></div>
   <br>
   <div class="right"><a href="logout.php">Logout</a></div>
   <br />
   <br />
   Dear <?php session_start(); echo " {$_SESSION['first_name']}.{$_SESSION['last_name']}@ndus.edu,";?>
   <br />
   <br />
   Hello <?php session_start(); echo " {$_SESSION['first_name']} {$_SESSION['last_name']} - User ID: {$_SESSION['user_id']},";?>
   this email is being sent to you for the confirmation of your apppointment on <?php session_start(); echo " {$_SESSION['date']}";?> 
   <br />Your appointment will be with your adivsor, Joan Krush -<?php echo " 0"; ?>, in the Quentin Burdick Building, room 258 B7. 
   <br />This email will be located in a text file in your final assignment project folder.
   <br>
   <br>
   Thank you,
   <br />
   Joan Krush
   <br>
   <br>
   <input type="submit" value="Confirm Email" onclick="myFunction()">
   
<?php 
    $space= "\n";
	$myfile = fopen("e.txt", "w") or die("Unable to open file!");
	$confirm = "THIS IS A CONFIRMATION EMAIL SENT BY YOUR ADVISOR. MAKE SURE THE INFORMATION BELOW IS CORRECT. IF NOT, PLEASE CONTACT ME.";
	$dear = "Dear {$_SESSION['first_name']}.{$_SESSION['last_name']}@ndus.edu,";
	$hello = "Hello {$_SESSION['first_name']} {$_SESSION['last_name']} - User ID: {$_SESSION['user_id']},";
	$dt = " this email is being sent to you for the confirmation of your apppointment on {$_SESSION['date']}";
	$appt = "Your appointment will be with your adivsor, Joan Krush - 0, in the Quentin Burdick Building, room 258 B7.";
	$location = "This email will be located in a text file in your final assignment project folder.";
	$ty = "Thank you,";
	$adv = "Joan Krush";
	fwrite($myfile, $confirm);
	fwrite($myfile, $space);
	fwrite($myfile, $space);
	fwrite($myfile, $dear);
	fwrite($myfile, $space);
	fwrite($myfile, $space);
	fwrite($myfile, $hello);
	fwrite($myfile, $dt);
	fwrite($myfile, $space);
	fwrite($myfile, $appt);
	fwrite($myfile, $space);
	fwrite($myfile, $location);
	fwrite($myfile, $space);
	fwrite($myfile, $space);
	fwrite($myfile, $ty);
	fwrite($myfile, $space);
	fwrite($myfile, $adv);
	fwrite($myfile, $space);
	fclose($myfile);
?>
<?php 
    include ( 'includes/footer.html' ) ; 
?>
</form>
</body>

</html>

