
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="form-wrapper">
  
   <div class="good">
  <form action="#" method="post">
    <h1><center>Join us today!</center></h1>
 </div>
	

    <div class="form-item">
		<input type="text" name="username" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Password" required></input>
    </div>
   
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="submit" value="Sing up"></input>
    </div>
  </form>
<?php
	require('dbcon.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

        $query = "INSERT into `users` (username, password, type) VALUES ('$username', '$password', 'user')";
        $result = mysqli_query($con,$query);
        if($result){
				header("Location: good.php");
        }
    }else{
?>
</div>
<?php } ?>
</body>
</html>
