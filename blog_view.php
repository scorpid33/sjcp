<?php
include_once('header.php');
require('dbcon.php');
//Test if logged in
if(!isset($_SESSION["username"])){
header("Location: index.php");
exit(); }

	if (!isset($_GET['id'])) {
		header("Location: home2.php");
	}
	
	$blog_id = $_GET['id'];
	
	$sql = "SELECT *  FROM blogs WHERE blog_id='".$blog_id."'";
	
	$query_result = mysqli_query($con, $sql);
	
	
	$result_row = $query_result->fetch_assoc();
	
	

?>

<body>
<div class="fixed-header">
<div style="text-align: left; margin-left: 15px;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);">
<a href="?link=1">Atgriezties atpakaļ</a>
</div>
<div style="text-align: center;">
<?php
echo "<h1>Blogs : ".$result_row['title']."</h1></div></div>";
?>
<div style="margin-top: 25px;" class="container">
<?php
if (!empty($result_row['images_folder_link'])) {
	echo "<br><img src='".$result_row['images_folder_link']."' class='blog_image_fit' alt='Blog image'>";
}
echo "<br><br><br>".$result_row['text'];
?>
</div>
</body>
<?php 
if(isset($_GET['link'])){
$link=$_GET['link'];
       if ($link == '1'){
            header("Location: home2.php");
		exit();
       }
}
	   $con->close(); ?>
