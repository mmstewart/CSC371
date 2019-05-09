<?php
$email = $_POST['email'];
$radio = $_POST['rad'];
$selectOption = $_POST['select'];

echo "<p><b>Your email is:</b> $email.</p>";

echo "<p><b>When using this website, you chose:</b><br>";
if(!empty($_POST['chx'])) {
    foreach($_POST['chx'] as $check) {
        echo " $check<br>";
    }
}

echo "<p><b>You selected</b> \"$selectOption\"<b> for your occupation.</b></p>";
echo "<p><b>When sending you junk mail, you chose:</b> \"$radio\".</p>";
?>