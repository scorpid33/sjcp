<?php 

$id = $_GET['id'];
$tg_id = $_GET['tg_id'];
$sql = "DELETE FROM participants WHERE user_id=" . $id . " and travel_group_id=" . $_GET['tg_id'] . ";";
            $conn = new mysqli('localhost','root','','sjcp');
            if($conn->connect_errno)
            {
                die ("database connection failed".$this->conn->connect_errno);
            }
            
$query = $conn->query($sql);
$conn->close();
header("LOCATION:TravelGroupListItemView.php?id=". $_GET['tg_id']);
?>