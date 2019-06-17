<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<?php
    require('dbcon.php');
    require('functions.php');

    $emailPattern = $emailExist = '';

    if(isset($_REQUEST['email'])){
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);

        $emailPattern = (!filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Nepareizi ievadīts e-pasts' : '';
        if(strlen($emailPattern) == 0){
            $query = "SELECT count(*) from `users` WHERE email='$email'";
            var_dump($query);
            $result = mysqli_query($con,$query);
            $emailExist = ($result->fetch_row()[0] == 0) ? 'E-pasts nav reģistrēts' : '';
        }


    }

    if(isset($_REQUEST['submit']) 
    && strlen($emailExist) == 0
    && strlen($emailPattern) == 0){

        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Your name <ivancar1234567890@gmail.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
        $newPassword = getRandomString(10);
        mail($email,'Paroles maiņa',"Jūsu jauna parole ir $newPassword. Lūdzu pierakstiet to", $headers);
        $query = "UPDATE `users` SET `password` = '$newPassword' WHERE `email`='$email'";
        $result = mysqli_query($con,$query);
        header("Location: index.php");
        
    }
?>
<form action="#" method="post">
<div class="form-wrapper">
<div class="good">
<center><h2>Ievadiet Jūsu e-pastu</h2>
<div class="form-item">
    <input type="text2" maxlength="30" name="email" placeholder="E-pasts" required
    value="<?php if(isset($_REQUEST['email'])) echo $email; ?>">
</div>
<?php
    if(strlen($emailExist)>0){
        echo '<div style="color:red; font-size:16px">
            '.$emailExist.'
        </div>';
    }
    if(strlen($emailPattern)>0){
        echo '<div style="color:red; font-size:16px">
            '.$emailPattern.'
        </div>';
    }
?>
<div class="button-panel">
<input type="submit" class="button" title="Saņemt paroli" name="submit" value="Saņemt paroli">
</div>

</div>
</div>
</form>
</body>
</html>