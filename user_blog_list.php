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
		Echo "<a href='blog_view.php?id=".$row['blog_id']."'><div class='blog_list'><img src='".$row['images_folder_link']."' width='150' height='150' alt='Blog image'> <label>".$row['title']."</label></div></a>";
	}

?>