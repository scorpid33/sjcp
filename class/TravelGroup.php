<?php 

Class TravelGroup 
{ 
    private $host="localhost";
	private $username="root";
	private $pass="";
    private $db_name="sjcp";
    private $conn;

    public $country; 
    public $place;
    public $description; 
    public $start_date; 
    public $end_date; 
    public $price;
    
    public function __construct() 
    {
    }

    public function getTravelGroup($id) 
    {
        $this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
        if($this->conn->connect_errno)
        {
            die ("database connection failed".$this->conn->connect_errno);
        }
        $query = $this->conn->query("select * from travel_groups where id=".$id);
        if (!$query) {
            printf("Errormessage: %s\n", $this->conn->error);
        } else { 
            $this->country = $query['country']; 
            $this->place = $query['place'];
            $this->description = $query['description']; 
            $this->start_date = $query['start_date']; 
            $this->end_date = $query['end_date']; 
            $this->price = $query['price'];
        }
    }

    public function persist($country, $place, $description, $start_date, $end_date, $price) 
    { 
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
    
    public function hydration($id,$country, $place, $description, $start_date, $end_date, $price)
    {
        $this->id = $id;
        $this->country = $country; 
        $this->place = $place;
        $this->description = $description; 
        $this->start_date = $start_date; 
        $this->end_date = $end_date; 
        $this->price = $price;
    }
}
?>