
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
<?php
  require('dbcon.php');
    $uniqueUsername = '';
    $uniqueEmail = '';

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
		$gender = stripslashes($_REQUEST['gender']);
    $gender = mysqli_real_escape_string($con,$gender);

    $query = "SELECT count(*) from `users` WHERE username='$username'";
    $result = mysqli_query($con,$query);
    if($result->fetch_row()[0] > 0){
      $uniqueUsername = 'Lietotājs ar tadu lietotājvardu jau eksistē.';
    }

    $query = "SELECT count(*) from `users` WHERE email='$email'";
    $result = mysqli_query($con,$query);
    if($result->fetch_row()[0] > 0){
      $uniqueEmail = 'Konts ar tadu e-pastu jau eksistē.';
    }

    if(!strlen($uniqueUsername)>0 && !strlen($uniqueEmail)>0){
      $query = "INSERT into `users` (username, password, type, email, name, surname, date, gender) VALUES ('$username', '$password', 'user', '$email', '$name', '$surname', '$date', '$gender')";
      $result = mysqli_query($con,$query);
      if($result){
        header("Location: anketa.php");
      }
    }
?>
<div class="form-wrapper">
  
   <div class="good">
  <form action="#" method="post">
    <h1><center>Reģistrējies tagad!</center></h1>
 </div>
	

    <div class="form-item">
      <input type="text" name="username" required="required" placeholder="Lietotājvārds" autofocus required
      value="<?php if(isset($_REQUEST['username'])){ echo $username; }?>">
      <?php
        if(strlen($uniqueUsername) > 0){
          echo '<div style="color:red; font-size:16px">
                  '.$uniqueUsername.'
                </div>';
        }
      ?>
    </div>
	
	<div class="form-item">
		<input type="text2" name="email" required="required" placeholder="E-pasts" required
    value="<?php if(isset($_REQUEST['email'])){ echo $email; }?>">
    </div>
    <?php
        if(strlen($uniqueEmail) > 0){
          echo '<div style="color:red; font-size:16px">
                  '.$uniqueEmail.'
                </div>';
          
        }
      ?>

    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Parole" required>
    </div>
	
	<div class="form-item">
		<input type="text3" name="name" required="required" placeholder="Vārds" required
    value="<?php if(isset($_REQUEST['name'])){ echo $name; }?>">
    </div>
	
	<div class="form-item">
		<input type="text4" name="surname" required="required" placeholder="Uzvārds" required
    value="<?php if(isset($_REQUEST['surname'])){ echo $surname; }?>">
    </div>
	
<!-- Gender Checkbox Start-->

<div class="gender center">
  <p class="genderText">Es esmu:</p>
  
  <div class="maleRadio">
    <input type="radio" onclick="matchGenderFemale.checked = true;" value="Male" name="gender" class="male" id="myGenderMale" checked/>
    <label for="myGenderMale"></label>
  </div>
  
  <div class="femaleRadio">
    <input type="radio" onclick="matchGenderMale.checked = true;" value="Female" name="gender" class="female" id="myGenderFemale" />
    <label for="myGenderFemale"></label>
  </div>
</div>
<!--Gender Checkbox End-->
	
	<div class="form-item">
    <input type="text5" id="datepicker" placeholder="Dzimšanas datums" name="date" required="required" required
    value="<?php if(isset($date)){ echo $date;}?>">
    </div>
   
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="submit" value="Reģistrēties"></input>
    </div>
  </form>

</div>
</body>
</html>
