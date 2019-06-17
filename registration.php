
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./Styloo.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<meta charset="utf-8">
<title>Registration</title>
</head>
<body>
<?php
  require('dbcon.php');


    $uniqueUsername = $usernamePattern  = $uniqueEmail = $emailPattern = 
    $differentPasswords = $namePattern = $surnamePattern = 
    $allowedAge = '';

  if(isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);

    $usernamePattern = (!preg_match('/^[a-zA-Z0-9]*$/', $username)) ? 'Tikai  cipari vai būrti ir atļauti' : '';

    $query = "SELECT count(*) from `users` WHERE username='$username'";
    $result = mysqli_query($con,$query);
    $uniqueUsername = ($result->fetch_row()[0] > 0) ? 'Lietotājs ar tadu lietotajvārdu jau eksistē' : '';   
  }
  if(isset($_REQUEST['password'])){
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
  }
  if(isset($_REQUEST['confirmPassword'])){
    $confirmPassword = stripslashes($_REQUEST['confirmPassword']);
    $confirmPassword = mysqli_real_escape_string($con,$confirmPassword);

    $differentPasswords = ($password != $confirmPassword) ? 'Paroles nesakrīt' : ''; 
  }
  if(isset($_REQUEST['email'])){
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);

    $emailPattern = (!filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Nepareizi ievadīts e-pasts' : '';
    if(strlen($emailPattern)==0){
      $query = "SELECT count(*) from `users` WHERE email='$email'";
      $result = mysqli_query($con,$query);
      $uniqueEmail = ($result->fetch_row()[0] > 0) ? 'Konts ar tadu e-pastu ir jau reģistrēts' : '';  
    }
  }
  if(isset($_REQUEST['name'])){
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con,$name);

    $namePattern = (!preg_match('/^[a-zA-Z]+(([,. -][a-zA-Z ])?[a-zA-Z]*)*$/',$namePattern)) ? 'Tikai burti ir atļauti' : '';
  }
  if(isset($_REQUEST['surname'])){
    $surname = stripslashes($_REQUEST['surname']);
    $surname = mysqli_real_escape_string($con,$surname);

    $surnamePattern = (!preg_match('/^[a-zA-Z]+(([,. -][a-zA-Z ])?[a-zA-Z]*)*$/',$surnamePattern)) ? 'Tikai burti ir atļauti' : '';
  }
  if(isset($_REQUEST['date'])){
    $date = stripslashes($_REQUEST['date']);
    $date = mysqli_real_escape_string($con,$date);
    
    $diff = floor((time() - strtotime($date))/31536000);

    $allowedAge = ($diff<18 || $diff>65) ? 'Reģistrācija ir atļautā tikai no 18 līdz 65 gadiem' : '';
  }
  if(isset($_REQUEST['gender'])){
    $gender = stripslashes($_REQUEST['gender']);
    $gender = mysqli_real_escape_string($con,$gender);
  }

    if(isset($_REQUEST['submit']) 
    && strlen($uniqueUsername) == 0
    && strlen($usernamePattern) == 0
    && strlen($uniqueEmail) == 0
    && strlen($emailPattern) == 0
    && strlen($differentPasswords) == 0
    && strlen($namePattern) == 0
    && strlen($surnamePattern) == 0
    && strlen($allowedAge) == 0){
      $query = "INSERT into `users` (username, password, type, email, name, surname, date, gender) VALUES ('$username', '$password', 'user', '$email', '$name', '$surname', '$date', '$gender')";
      $result = mysqli_query($con,$query);
      if($result){
        header("Location: anketa.php");
      }
    }
?>
<div class="form-wrapper" style="{height:0}">
  
   <div class="good">
  <form action="#" method="post">
    <h1><center>Reģistrējies tagad!</center></h1>
 </div>
	

    <div class="form-item">
      <input type="text" maxlength="30" name="username" required="required" placeholder="Lietotājvārds" autofocus required
      value="<?php if(isset($_REQUEST['username'])){ echo $username; }?>">
      <?php
      if(strlen($usernamePattern)>0){
          echo '<div style="color:red; font-size:16px">
                  '.$usernamePattern.'
                </div>';
      } else {
        if(strlen($uniqueUsername) > 0){
          echo '<div style="color:red; font-size:16px">
                  '.$uniqueUsername.'
                </div>';
        }
      }
      ?>
    </div>
	
	<div class="form-item">
		<input type="text2" name="email" required="required" placeholder="E-pasts" required
    value="<?php if(isset($_REQUEST['email'])){ echo $email; }?>">
    </div>
    <?php
        if(strlen($uniqueEmail)>0){
          echo '<div style="color:red; font-size:16px">
                  '.$uniqueEmail.'
                </div>';
        }
        if(strlen($emailPattern)>0){
          echo '<div style="color:red; font-size:16px">
                  '.$emailPattern.'
                </div>';
        }
      ?>

    <div class="form-item">
		<input type="password" maxlength="20" name="password" required="required" placeholder="Parole" required
    value="<?php if(isset($_REQUEST['password'])){ echo $password; }?>">
    </div>

    <div class="form-item">
		<input type="password" maxlength="20" name="confirmPassword" required="required" placeholder="Apstiprināt paroli" required>
    </div>
    <?php
    if(strlen($differentPasswords)>0){
          echo '<div style="color:red; font-size:16px">
                  '.$differentPasswords.'
                </div>';
    }
    ?>
	
	<div class="form-item">
		<input type="text3" name="name" required="required" placeholder="Vārds" required
    value="<?php if(isset($_REQUEST['name'])){ echo $name; }?>">
    </div>
<?php
  if(strlen($namePattern)>0){
    echo '<div style="color:red; font-size:16px">
            '.$namePattern.'
          </div>';
  }
?>
	
	<div class="form-item">
		<input type="text4" name="surname" required="required" placeholder="Uzvārds" required
    value="<?php if(isset($_REQUEST['surname'])){ echo $surname; }?>">
    </div>
<?php
  if(strlen($surnamePattern)>0){
    echo '<div style="color:red; font-size:16px">
            '.$surnamePattern.'
          </div>';
  }
?>

	
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
    <?php
    if(strlen($allowedAge)>0){
      echo '<div style="color:red; font-size:16px">
              '.$allowedAge.'
            </div>';
    }
    ?>
   
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="submit" value="Reģistrēties"></input>
    </div>
  </form>

</div>
</body>
</html>
