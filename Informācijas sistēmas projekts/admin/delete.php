<?php
extract($_POST);
include "../class/users.php";
$quiz=new users;
$query="DELETE FROM category WHERE id=$cat";

if($quiz->add_quiz($query))
{
	$quiz->url("index3.php?msg=run");
	echo "Delete was successful";
}

?>