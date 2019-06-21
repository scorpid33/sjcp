<?php
require_once('./class/TravelGroup.php');

Class TravelMiniDescriptionComponent{
    
    //private $header= '';
    private $country= '';
    private $place= '';
    private $start_date= '';
    private $end_date= '';
    private $price= 0;
    private $duration= 0;
    //private $footer= '';

    function __construct(TravelGroup $travel_group){
        //Can work only with class TravelGroup objektiem
        if(is_a($travel_group, 'TravelGroup')){
            $this->id = $travel_group->id;
            $this->country = $travel_group->country;
            $this->place = $travel_group->place;
            $this->start_date = $travel_group->start_date;
            $this->end_date = $travel_group->end_date;
            $this->price = $travel_group->price;
            $this->duration = 0;
        } else {
            
        }
    }

    function show(){
        echo '
        <div class="container travel-desc">
            <div class="image-box">
                <div class="image">
                    <img src="https://neupusti.net/wp-content/uploads/2019/04/cq5dam.web_.1280.1280.jpeg">
                </div>
                <div class="badge badge-error">recommended</div>
                <div class="description">
                    <div class="info">
                        <div class="dates">No '.$this->start_date.' līdz '.$this->end_date.'</div>
                        <div class="country">'.$this->country.'</div>
                    </div>
                    <div class="price">
                        <div class="price-from">Sakot no</div>
                        <div class="price-value">'.$this->price.' EUR</div>
                    </div>
                </div>
            </div>
            <div class="middle">
                <a href="../Travel/TravelPage.php?id='.$this->id.'"><input type="submit" class="btn btn-success" value="View details"></a>
            </div>
         </div>';

    }
}
?>