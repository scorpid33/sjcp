<?php
include("class/users.php");
$qus=new  users;
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
		  <h2>Lūdzu aizpildiet anketu</h2>

		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th> 1. Cik bieži Jūs ceļojiet? </th>
			  </tr>
			</thead>
			
			<tbody>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="0" name="id" />&nbsp; Bieži </td>
			  </tr>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" value="1" name="id" />&nbsp; Dažreiz </td>
			  </tr>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="2" name="id" />&nbsp; Reti </td>
			  </tr>
			  	<tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="3" name="id" />&nbsp; Nekad nēceļoju </td>
			  </tr>
			<tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="id2>" /></td>
			  </tr>
			</tbody>
			
			<thead>
			  <tr class="danger">
				<th> 2. Kur Jūs bijat pedējo reizi? </th>
			  </tr>
			</thead>
			
			<tbody>
				<tr class="info">
					<td> <input type="text" name="name"><br> </td>
				</tr>
			</tbody>
			
			<thead>
			  <tr class="danger">
				<th> 3. Uz kurieni Jūs gribētu aizbraukt? </th>
			  </tr>
			</thead>
			
			<tbody>
				<tr class="info">
					<td> <input type="text" name="name"><br> </td>
				</tr>
			</tbody>
			
			<thead>
			  <tr class="danger">
				<th> 4. Kā Jūs pavadāt savu brīvo laiku? </th>
			  </tr>
			</thead>
			
			<tbody>
				<tr class="info">
					<td> <input type="text" name="name"><br> </td>
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
