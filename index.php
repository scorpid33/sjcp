<?php require('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<div class="form-wrapper">
  <div class="good">
  <form action="#" method="post">
    <h1><center>Laipni lūgti!</center></h1>
	</div>
	
    <div class="form-item">
		<input type="text" name="username" required="required" placeholder="Lietotājvārds" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Parole" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Autorizēties"></input>
    </div>
	    <div class="reminder">
    <p><a href="registration.php">Reģistrēties</a></p>
	<p><a href="changePassword.php">Mainīt paroli</a></p>
	<p><a href="info.php">KAS iR ŠĪ PLATFORMA?</a></p>
  </div>
  </form>

<?php 
	require('dbcon.php'); 
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$result = mysqli_query($con, $query);
		if (mysqli_num_rows($result) == 1) {
			$logged_in_user = mysqli_fetch_assoc($result);
			if ($logged_in_user['type'] == 'admin') {
				$_SESSION['username'] = $username;
				header("Location: ../TravelGroup/CreateTravelGroupView.php"); // Redirect user to home.php
			}else{
				$_SESSION['username'] = $username;
				header("Location: home2.php");
			}
		}else{
			header("Location: fail.php");
		}
?>
</div>
<?php } ?>
</body>
</html>