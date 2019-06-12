
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="Styloo.css">
</head>
<body>
<div class="form-wrapper">
  
   <div class="good">
  <form action="#" method="post">
    <h1><center>Reģistrējies tagad!</center></h1>
 </div>
	

    <div class="form-item">
		<input type="text" name="username" required="required" placeholder="Lietotājvārds" autofocus required></input>
    </div>
	
	<div class="form-item">
		<input type="text2" name="email" required="required" placeholder="E-pasts" required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Parole" required></input>
    </div>
	
	<div class="form-item">
		<input type="text3" name="name" required="required" placeholder="Vārds" required></input>
    </div>
	
	<div class="form-item">
		<input type="text4" name="surname" required="required" placeholder="Uzvārds" required></input>
    </div>
	
<!-- Gender Checkbox Start-->

<div class="gender center">
  <p class="genderText">Es esmu:</p>
  
  <div class="maleRadio">
    <input type="radio" onclick="matchGenderFemale.checked = true;" value="Male" name="gender" class="male" id="myGenderMale" />
    <label for="myGenderMale"></label>
  </div>
  
  <div class="femaleRadio">
    <input type="radio" onclick="matchGenderMale.checked = true;" value="Female" name="gender" class="female" id="myGenderFemale" />
    <label for="myGenderFemale"></label>
  </div>
</div>
<!--Gender Checkbox End-->
	
	<div class="form-item">
		<input type="text5" id="datepicker" placeholder="Dzimšanas datums" name="date" required="required" required>
    </div>
   
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="submit" value="Reģistrēties"></input>
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
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con,$name);
		$surname = stripslashes($_REQUEST['surname']);
		$surname = mysqli_real_escape_string($con,$surname);
		$date = stripslashes($_REQUEST['date']);
		$date = mysqli_real_escape_string($con,$date);
		
		$gender = stripslashes($_REQUEST['g']);

        $query = "INSERT into `users` (username, password, type, email, name, surname, date, gender) VALUES ('$username', '$password', 'user', '$email', '$name', '$surname', $date, $gender)";
        $result = mysqli_query($con,$query);
        if($result){
				header("Location: anketa.php");
        }
    }else{
?>
</div>
<?php } ?>
</body>
</html>
