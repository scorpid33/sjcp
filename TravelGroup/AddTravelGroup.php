<?php 
require_once('../class/TravelGroup.php');

 if (isset($_POST['destination']) && $_POST['destination'] != null 
    && isset($_POST['country']) && $_POST['country'] != null  
    && isset($_POST['place']) && $_POST['place'] != null 
    && isset($_POST['description']) && $_POST['description'] != null 
    && isset($_POST['start_date']) && $_POST['start_date'] != null 
    && isset($_POST['end_date']) && $_POST['end_date'] != null 
    && isset($_POST['price']) && $_POST['price'] != null) { 
        $country = $_POST['country'];
        $place = $_POST['place'];
        $description = $_POST['description'];
        $start_date = $_POST['start_date']; 
        $end_date = $_POST['end_date']; 
        $price = $_POST['price'];
        $travel_group = new TravelGroup(); 
        $travel_group->persist($country, $place, $description, $start_date, $end_date, $price);
        $error_msg = "Ceļojums veiksmīgi pievienots";
    } 


?>