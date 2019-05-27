		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$result = mysqli_query($con, $query);

		if (mysqli_num_rows($result) == 1) { // user found
			// check if user is admin or user
			
			
			
			
			$logged_in_user = mysqli_fetch_assoc($result);
			if ($logged_in_user['type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: fail.php');
			}
			
			
			
			
			
			
			
			$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: home.php"); // Redirect user to home.php
            }else{
				header("Location: fail.php");
				}