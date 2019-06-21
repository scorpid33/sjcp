<html>
<head>
  <link rel="stylesheet" type="text/css" href="./css/blogadd.css">
<meta charset="utf-8">
</head>

<?php
include_once('header.php');
require('dbcon.php');
//Test if logged in
if(!isset($_SESSION["username"])){
header("Location: index.php");
exit(); }


  // If upload button is clicked ...
  if (isset($_POST['submit_blog'])) {
  	// Get image name
	$image = "";
  	$image = $_FILES['image_upload_text']['name'];
  	// Get text
  	$blog_content = mysqli_real_escape_string($con, $_POST['blog_content']);
	$blog_title = mysqli_real_escape_string($con, $_POST['blog_title']);

  	// image file directory
	if (!empty($image)) {
  	$target = "images/".basename($image);
	} else {
		$target = null;
	}
	/* ID from table users can change. Need final db */
	if(!isset($_SESSION['user_id'])) {
		include_once("get_user_id.php");
	}
	
  	$sql = "INSERT INTO blogs (users_id, images_folder_link, title, text) VALUES (".$_SESSION['user_id'].", '$target','$blog_title' , '$blog_content')";
  	// execute query
  	// mysqli_query($con, $sql);

  if (move_uploaded_file($_FILES['image_upload_text']['tmp_name'], $target)) {
		//Success
  	}else{
  		$msg = "Failed to upload image";
  	}
	
	if (!$con->query($sql) === TRUE) {
		echo "Error: " . $sql . "<br>" . $con->error;
}
	header("Location: home2.php");
	exit();
  }
  
  if (isset($_POST['exit_blog'])) {
	  header("Location: home2.php");
	exit();
  }

?>

<body>
<style>
.form-wrapper {
  width:1200px;
  position: absolute;
  top: 30%;
  left: 15%;
  background: rgb(211,211,215);
  border-style: solid;
  border-color: black;
  padding: 15px 25px;
  border-radius: 25px;
}

.form-wrapper2 {
  position: absolute;
  top: 80%;
  left: 9%;
  position: absolute;
  background: rgb(211,211,215);
  border-style: solid;
  border-color: black;
  padding: 5px 5px;
  border-radius: 25px;
}

body{
  color: black;
  font-size: 16px;
}

.profile{
  font-size: 16px;
  color: black;
}

.good {
color: #000000;
margin-top: -11px;
}
</style>
<div class="form-wrapper">
<div class="good">
<b><h2> Bloga Izveide </h2></b>
<center>
<form method="POST" enctype="multipart/form-data">
<h2>Virsraksts</h2>
<textarea rows="1" cols="35" name="blog_title" class="h1 blog-border_radius-s"></textarea>
<div class="form-wrapper2">
<h3><label for="Img_file_upload">Augšuplādēt bildi</label></h3>
</div>

<!–– for iekš label pasaka kādu nosaukumu dot failam ar noteiktu id. Izmanto style="visibility:hidden;", lai paslēptu pogu, un tādā veidā lebel strādātu kā poga. --->

<input type="file" name="image_upload_text" id="Img_file_upload" multiple accept='image/*' style="visibility:hidden;" >

<h2>Raksts</h2>
<textarea rows="20" cols="120" name="blog_content" class="blog-border_radius-s"></textarea>
<br><br>
<input type="submit" name="submit_blog" value="Izveidot blogu" class="blog-border_radius-vs log-button-spacing blog-background-dark_grey">
<input type="submit" name="exit_blog" value="Atgriezties atpakaļ" class="blog-border_radius-vs log-button-spacing blog-background-dark_grey"></center>
</form>
</div>
</div>
</body>
<?php $con->close(); ?>
</html>

