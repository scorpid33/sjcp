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
<div class="container">

<?php
echo "<h1>".$result_row['title']."</h1>";
if (!empty($result_row['images_folder_link'])) {
	echo "<br><img src='".$result_row['images_folder_link']."' alt='Blog image'>";
}
echo "<br><br><br>".$result_row['text'];
?>
</div>
</body>
<?php $con->close(); ?>