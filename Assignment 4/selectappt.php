<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select an Appointment</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="backgroundColor.css">
<link rel="stylesheet" type="text/css" href="search.css">
</head>

<body>
<?php 

include ( 'includes/header.html' ) ;
   
?>
<form action="available.php" method="post">
<div class="left"><a href="home.php">Return home</a></div>
<div class="right"><?php session_start() ;  echo "Logged in as: {$_SESSION['first_name']} {$_SESSION['last_name']}"; ?></div>
<br>
<div class="right"><a href="logout.php">Logout</a></div>
<br />
<br />
<center><b>Joan Krush's Advising Schedule</b></center>
<br />
<br />
<center><table class="tg">
  <tr>
    <th class="tg-031e">Time</th>
    <th class="tg-031e">Monday</th>
    <th class="tg-031e">Tuesday</th>
    <th class="tg-yw4l">Wednesday</th>
    <th class="tg-yw4l">Thursday</th>
    <th class="tg-yw4l">Friday</th>
    <th class="tg-baqh">Saturday</th>
    <th class="tg-yw4l">Sunday</th>
  </tr>
  <tr>
    <td class="tg-031e">9:00 A.M.</td>
    <td class="tg-031e"><input type="radio" name="date" value="Monday at 9:00 A.M." required></td>
    <td class="tg-031e">Staff Meeting</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 9:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 9:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 9:00 A.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-031e">9:30 A.M.</td>
    <td class="tg-031e">Not Available</td>
    <td class="tg-031e">Staff Meeting</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 9:30 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 9:30 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 9:30 A.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr> 
    <td class="tg-yw4l">10:00 A.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 10:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 10:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 10:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 10:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 10:00 A.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">10:30 A.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 10:30 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 10:30 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 10:30 A.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 10:30 A.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">11:00 A.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 11:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 11:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 11:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 11:00 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 11:00 A.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">11:30 A.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 11:30 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 11:30 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 11:30 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 11:30 A.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 11:30 A.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">12:00 P.M.</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">12:30 P.M.</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">1:00 P.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 1:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 1:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 1:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 1:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 1:00 P.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">1:30 P.M.</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 1:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 1:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 1:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 1:30 P.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">2:00 P.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 2:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 2:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 2:00 P.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">2:30 P.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 2:30 P.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 2:30 P.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 2:30 P.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">3:00 P.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 3:00 P.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 3:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 3:00 P.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">3:30 P.M</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 3:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 3:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 3:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 3:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 3:30 P.M."></td>
    <td class="tg-baqh">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">4:00 P.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 4:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 4:00 P.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 4:00 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 4:00 P.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
  <tr>
    <td class="tg-yw4l">4:30 P.M.</td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Monday at 4:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Tuesday at 4:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Wednesday at 4:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Thursday at 4:30 P.M."></td>
    <td class="tg-yw4l"><input type="radio" name="date" value="Friday at 4:30 P.M."></td>
    <td class="tg-yw4l">Not Available</td>
    <td class="tg-yw4l">Not Available</td>
  </tr>
</table></center>
<br />
<br />
<center><input type="submit" value="Submit"></center>
</form>
<?php 
    include ( 'includes/footer.html' ) ; 
?>
</body>
</html>