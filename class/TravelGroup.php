<?php 

Class TravelGroup 
{ 
    private $host="localhost";
	private $username="root";
	private $pass="";
    private $db_name="sjcp";
    private $conn;
    
    public function __construct ($country, $place, $description, $start_date, $end_date, $price) { 
        $this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
        if($this->conn->connect_errno)
        {
            die ("database connection failed".$this->conn->connect_errno);
        }

        if (!$this->conn->query("insert into travel_groups (country, place, description, start_date, end_date, price) values ('$country','$place','$description','$start_date', '$end_date', '$price')")) {
            printf("Errormessage: %s\n", $this->conn->error);
        }
        
        $this->conn->close();
    }
}
?>