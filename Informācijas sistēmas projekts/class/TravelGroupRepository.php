<?php 
require_once('TravelGroup.php');

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
            $travel_groups = $this->conn->query("select id,country, place, description, start_date, end_date, price from travel_groups");
            foreach ($travel_groups as $travel_group_arr) { 
                $travel_group = new TravelGroup(); 
                $travel_group->hydration($travel_group_arr['id'], $travel_group_arr['country'], $travel_group_arr['place'], $travel_group_arr['description'], $travel_group_arr['start_date'], $travel_group_arr['end_date'], $travel_group_arr['price']);
                $this->travel_groups[] = $travel_group;
            }
        }
        $this->conn->close();
    }

    public function getTravelGroupList() 
    {
        return $this->travel_groups;
    }

    public function getTravelGroupItemById($id)
    { 
        foreach ($travel_groups as $travel_group) { 
            if ($travel_group->id == $id) { 
                return $travel_group;
            }
        }
    }

}
?>