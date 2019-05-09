<?php
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$radio = $_POST['college'];

echo "<p><b>Your first name is:</b> $fName</p>";
echo "<p><b>Your last name is:</b> $lName</p>";
echo "<p><b>Your email is:</b> $email</p>";
echo "<p><b>Year in college: </b> \"$radio\"</p>";
?>