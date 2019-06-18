<?php
function get_user_id() {
    if (!isset($_SESSION["username"])) {
		return;
	}
	if (!isset($con)) {
		$con = mysqli_connect("localhost","root","","sjcp");
		
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
	
	$sql = "SELECT id  FROM users WHERE username='".$_SESSION["username"]."'";
	
	$query_result = $con->query($sql);
	
	if ($query_result->num_rows == 1) {
    // output data of each row
    $user_id=mysqli_fetch_row($query_result);
	$_SESSION['user_id'] = $user_id[0];
	return;
} else {
	return;
}
}

get_user_id();
?>