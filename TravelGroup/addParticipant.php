<?php 
$sql = "INSERT INTO participants (user_id, travel_group_id) VALUES (" . $_GET['user_id'] . "," . $_GET['tg_id'] . ");"; 
            $conn = new mysqli('localhost','root','','sjcp');
            if($conn->connect_errno)
            {
                die ("database connection failed".$this->conn->connect_errno);
            }
            
$query = $conn->query($sql);
$conn->close();
header("LOCATION:TravelGroupListItemView.php?id=". $_GET['tg_id']);
?>