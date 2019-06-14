<?php
session_start();
require('country_select.php');
require('dbcon.php');
$countrySelect = new CountrySelect();
if(isset($_POST['login'])){
	$howOften = stripslashes($_REQUEST['howOften']);
	$howOften = mysqli_real_escape_string($con,$howOften);
	$lastVisited = stripslashes($_REQUEST['lastVisited']);
	$lastVisited = mysqli_real_escape_string($con,$lastVisited);
	$wantVisit = stripslashes($_REQUEST['wantVisit']);
	$wantVisit = mysqli_real_escape_string($con,$wantVisit);
	$interests = stripslashes($_REQUEST['interests']);
	$interests = mysqli_real_escape_string($con,$interests);

	$query = "UPDATE `users` u SET u.howOften='$howOften', u.lastVisited='$lastVisited', u.wantVisit='$wantVisit', u.interests='$interests' WHERE u.username='".$_SESSION['username']."'";
        echo var_dump($query);
		$result = mysqli_query($con,$query);
		if($result){
			header('Location: good.php');
		}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body onload="timeout()" >




<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	<form action="#" method="post">
		  <h2>Lūdzu aizpildiet anketu</h2>

		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th> 1. Cik bieži Jūs ceļojiet? </th>
			  </tr>
			</thead>
			
			<tbody>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="0" name="howOften" id="opt1" checked/>&nbsp;<label for="opt1"> Bieži </label></td>
			  </tr>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" value="1" name="howOften" id="opt2" />&nbsp; <label for="opt2"> Dažreiz </label></td>
			  </tr>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="2" name="howOften" id="opt3" />&nbsp; <label for="opt3"> Reti </label> </td>
			  </tr>
			  	<tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="3" name="howOften" id="opt4" />&nbsp; <label for="opt4"> Nekad nēceļoju </label> </td>
			  </tr>
			</tbody>
			
			<thead>
			  <tr class="danger">
				<th> 2. Kur Jūs bijat pedējo reizi? </th>
			  </tr>
			</thead>
			
			<tbody>
				<tr class="info">
					<td> <?php $countrySelect->create('lastVisited');?><br> </td>
				</tr>
			</tbody>
			
			<thead>
			  <tr class="danger">
				<th> 3. Uz kurieni Jūs gribētu aizbraukt? </th>
			  </tr>
			</thead>
			
			<tbody>
				<tr class="info">
					<td> <?php $countrySelect->create('wantVisit');?><br> </td>
				</tr>
			</tbody>
			
			<thead>
			  <tr class="danger">
				<th> 4. Kā Jūs pavadāt savu brīvo laiku? </th>
			  </tr>
			</thead>
			
			<tbody>
				<tr class="info">
					<td> <textarea class="form-control" cols="20" rows="5" name="interests"></textarea>
				</tr>
			</tbody>
			
		  </table>
		  
	<center>
		<div class="button-panel">
			<a href="good.php"><input type="submit" class="btn btn-success" title="Log In" name="login" value="Iesniegt"></input></a>
		</div>
	</center>
	
	</form>	
</div>
<div class="col-sm-2"></div>
</div>

</body>
</html>
