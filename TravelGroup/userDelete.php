<?php 

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='" . $id . "'";
            $conn = new mysqli('localhost','root','','sjcp');
            if($conn->connect_errno)
            {
                die ("database connection failed".$this->conn->connect_errno);
            }
            
$query = $conn->query($sql);
$conn->close();
header("LOCATION:UserManagment.php");
?>