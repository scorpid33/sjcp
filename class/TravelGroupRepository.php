<?php 

Class TravelGroupRepository 
{ 
    private $host="localhost";
	private $username="root";
	private $pass="";
    private $db_name="sjcp";
    private $conn;
    private $travel_groups;
    
    public function __construct() 
    { 
        $this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
        if($this->conn->connect_errno)
        {
            die ("database connection failed".$this->conn->connect_errno);
        }

        if (!$this->conn->query("select country, place, description, start_date, end_date, price from travel_groups")) {
            printf("Errormessage: %s\n", $this->conn->error);
        } else { 
            $this->travel_groups = $this->conn->query("select id,country, place, description, start_date, end_date, price from travel_groups");
        }
        $this->conn->close();
    }

    public function getTravelGroupList() 
    {
        return $this->travel_groups;
    }
}
?>