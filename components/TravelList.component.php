<?php
require_once('class/TravelGroupRepository.php');
require_once('components/TravelMiniDesc.component.php');

Class TravelListComponent {

    private $travel_groups_recommended;
    private $travel_groups;

    function __construct(){
        $travel_rep = new TravelGroupRepository;
        $this->travel_groups = $travel_rep->getTravelGroupList();
        $this->travel_groups_recommended = [];
    }

    function show(){
        // Not shown if no recommendations;
        if(count($this->travel_groups_recommended)){
            echo '  <div class="label label-info text-center">
                        <h3><strong> Mēs rekomendējam: </strong></h3>
                    </div>
                    <div class="container-fluid">
                        <div class="row">';
            foreach($this->travel_groups as $travel_group){
                echo '<div class="col-lg-6">';
                $component = new TravelMiniDescriptionComponent($travel_group);
                $component->show();
                echo '</div>';
            }
            echo '      </div>
                    </div>';
        }
        //All available travels
        echo '  <div class="alert alert-info text-center">
                    <h3><strong> Visi ceļojumi </strong><h3>
                </div>
                <div class="container-fluid">
                    <div class="row">';
        foreach($this->travel_groups as $travel_group){
            echo '<div class="col-lg-6">';
            $component = new TravelMiniDescriptionComponent($travel_group);
            $component->show();
            echo '</div >';
        }
        echo '      </div>
                </div>';
    }
}
?>