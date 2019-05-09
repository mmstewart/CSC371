<link rel="stylesheet" href="backgroundColor.css">
<link rel="stylesheet" type="text/css" href="search.css">
<?php

    if(isset($_POST['submit']))
    {
        //The form has been submitted, prep a nice thank you username
        $output = '<center><h1>Thanks for your email and username!</h1></center>';
		$output2 = '<center><a href="home.php">Return home</a></center>';
        //Set the form flag to no display (cheap way!)
        $flags = 'style="display:none;"';

        //Deal with the email
        $to = 'Oksana.Myronovych@ndsu.edu';
        $subject = 'Advisor appointment confirmation email';

        $username = strip_tags($_POST['username']);
        $tel = strip_tags($_POST['tel']);

        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
        $filename = $_FILES['file']['name'];

        $boundary =md5(date('r', time())); 

        $headers = "From: webmaster@example.com\r\nReply-To: webmaster@example.com";
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

        $username="This is a multi-part username in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$username

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";



        mail($to, $subject, $username, $headers);
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mail File</title>
</head>

<body>
<?php 

include ( 'includes/header.html' ) ;    

?>
<?php echo $output; echo "<br><br>$output2"; ?>

<form enctype="multipart/form-data" action="<?php echo $_SERVER['../../Documents/PHP_SELF'];?>" method="post" <?php echo $flags;?>>
        <div class="right"><?php session_start() ;  echo "Logged in as: {$_SESSION['first_name']} {$_SESSION['last_name']}"; ?></div>
        <br>
        <div class="right"><a href="logout.php">Logout</a></div>
        <br>
        <br>
<center><p><label for="username">Username: </label> <input name="username" id="username" required/></p></center>
<center><p><label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File: </label> <input type="file" name="file" id="file" required></p></center>
<center><p><input type="submit" name="submit" id="submit" value="Send"></p></center>
</form>
<?php 
    include ( 'includes/footer.html' ) ; 
?>
</body>
</html>
 
