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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center">'.$this->country.' gaida tevi!</h1>
            </div>
            <div class="panel-body">       
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" id="top_image" src="https://images.pexels.com/photos/338515/pexels-photo-338515.jpeg?cs=srgb&dl=architecture-buildings-church-338515.jpg&fm=jpg">
                    </div>
                    <div class="media-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div><strong>Valsts:</strong> '.$this->country.'</div>
                            </li>
                            <li class="list-group-item">
                                <div><strong>Vieta:</strong> '.$this->place.'</div>
                            </li>
                            <li class="list-group-item">
                                <div><strong>Sakuma datums:</strong> '.$this->start_date.'</div>
                            </li>
                            <li class="list-group-item">
                                <div><strong>Beigas datums:</strong> '.$this->end_date.'</div>
                            </li>
                            <li class="list-group-item">
                                <div><strong>Cena:</strong> '.$this->price.'&#8364 par vienu personu</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="media">
                    <div class="media-body">
                        <h3> Steidzāties</h3>
                    </div>
                    <div class="media-right media-middle">
                        <a href="../Travel/TravelPage.php?id='.$this->id.'"><input type="submit" class="btn btn-success" value="View details"></a>
                    </div>
                </div>
            </div>
        </div>';
    }
}
?>