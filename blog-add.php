<?php

function get_user_blog_list() {
    
	if(!isset($_SESSION['user_id'])) {
		include_once("get_user_id.php");
	}
	
	if (!isset($con)) {
		$con = mysqli_connect("localhost","root","","sjcp");
		
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
	
	$sql = "SELECT *  FROM blogs WHERE users_id='".$_SESSION["user_id"]."'";
	
	$query_result = mysqli_query($con, $sql);
	
	
	while ($row = $query_result->fetch_assoc()) {
        $user_blogs [] = $row;
    }

    /* free result set */
    $query_result->free();
	
	return $user_blogs;
}
	$user_blog_array = get_user_blog_list();
	
	
	foreach ($user_blog_array as $row) {
		Echo "<a href='blog_view.php?id=".$row['blog_id']."'><div class='blog_list blog-border'><img src='".$row['images_folder_link']."' width='150' height='145' alt='Blog image'> <label>".$row['title']."</label></div></a>";
	}

?>
<<<<<<< HEAD

<body>
<div class="container">
<h2> Bloga Izveide </h2>

<form method="POST" enctype="multipart/form-data">
<h2>Virsraksts</h2>
<textarea rows="1" cols="35" name="blog_title" class="h1"></textarea>
<h2><label for="Img_file_upload">Augšuplādēt failu</label></h2>

<!–– for iekš label pasaka kādu nosaukumu dot failam ar noteiktu id. Izmanto style="visibility:hidden;", lai paslēptu pogu, un tādā veidā lebel strādātu kā poga. --->

<input type="file" name="image_upload_text" id="Img_file_upload" multiple accept='image/*' style="visibility:hidden;" >

<h2>Raksts</h2>
<textarea rows="20" cols="120" name="blog_content"></textarea>
<br><br>
<input class="btn btn-submit" type="submit" name="submit_blog" value="Izveidot blogu">
</form>
<a href="/home2.php"><input type="submit" class="btn btn-success" value="Atpakaļ"></a>
</div>
</body>
<?php $con->close(); ?>
=======
>>>>>>> 5b091c81ab173cf54eccee825624a95656e00dac
