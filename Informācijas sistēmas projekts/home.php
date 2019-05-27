<?php 
include('dbcon.php');
include('auth.php'); 
 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="Stylo.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $_SESSION['username']; ?> </h3></center>
	 <div class="reminder">
    <h2><a href="logout.php">Log out</a></h2>
  </div>
</div>
</body>
</html>