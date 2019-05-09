<?php  include ('include/header.php'); ?>
	<div id="content">
		<form>
			<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php $name=$_POST['userName']; 
            echo "Hello, $name!";?></h3>
            <h3>What is your favorite&nbsp;&nbsp;&nbsp;
        <input type="text" onkeyup="showHint(this.value)" style="width:90px;"/>
        <br />movie/book?</h3>
		</form>
		<h3>Did you mean... <span id="txtHint"></span></h3>
	</div>
<?php include ('include/footer.php'); ?>
