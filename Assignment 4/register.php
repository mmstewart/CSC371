<link rel="stylesheet" href="backgroundColor.css">
<?php # DISPLAY COMPLETE REGISTRATION PAGE.

# Set page title and display header section.
$page_title = 'Register' ;
include ( 'includes/header.html' ) ;

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();

  # Check for a first name.
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for a last name.
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $dbc, trim( $_POST[ 'last_name' ] ) ) ; }
  
  # Check for an username:
  if ( empty( $_POST[ 'username' ] ) )
  { $errors[] = 'Enter your username.'; }
  else
  { $u = mysqli_real_escape_string( $dbc, trim( $_POST[ 'username' ] ) ) ; }

  # Check for a password and matching input passwords.
  if ( !empty($_POST[ 'pass1' ] ) )
  {
    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $dbc, trim( $_POST[ 'pass1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }
  
  # Check if username already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM users WHERE username='$u'" ;
    $r = @mysqli_query ( $dbc, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Username already registered. <a href="login.php">Login</a>' ;
  }
  
  # On success register user inserting into 'userTable' database table.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO users (first_name, last_name, username, pass, reg_date) VALUES ('$fn', '$ln', '$u', SHA1('$p'), NOW() )";
    $r = @mysqli_query ( $dbc, $q ) ;
    if ($r)
    { echo '<h1>Registered!</h1><p>You are now registered.</p><p><a href="login.php">Login</a></p>'; }
  
    # Close database connection.
    mysqli_close($dbc); 

    # Display footer section and quit script:
    include ('includes/footer.html'); 
    exit();
  }
  # Or report errors.
  else 
  {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    mysqli_close( $dbc );
  }  
}
?>

<!-- Display body section with sticky form. -->
<h1>Register</h1>
<form action="register.php" method="post">
<p>First Name: <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"> 
Last Name: <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"></p>
<p>Username: <input type="text" name="username" size="50" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"></p>
<p>Password: <input type="password" name="pass1" size="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" >
Confirm Password: <input type="password" name="pass2" size="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"></p>
<p><input type="submit" value="Register"></p>
</form>

<?php 

# Display footer section.
include ( 'includes/footer.html' ) ; 

?>
