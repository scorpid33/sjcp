<?php
require_once('../class/TravelGroupRepository.php');
require_once('../components/TravelMiniDesc.component.php');

$travel_group_list_item = new TravelGroupRepository;
$travel_groups = $travel_group_list_item->getTravelGroupList();
$travel_groups_recommended = [];
$travel_groups_recommended[0] = $travel_groups[0];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="TravelList.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

    <!-- Recommended travels -->
    <?php
    // Not shown if no recommendations;
    if(count($travel_groups_recommended)){
        echo '<div class="jumbotron">
                <h1>Mēs rekomendējam: </h1>
            </div>';
        echo '<div class="container-fluid">';
        echo '<div class="row">';
        foreach($travel_group_list_item->getTravelGroupList() as $travel_group){
            echo '<div class="col-lg-6">';
            $component = new TravelMiniDescriptionComponent($travel_group);
            $component->show();
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
    ?>

    <!-- All Availabale travels -->
    <div class="jumbotron">
        <h1>Visi ceļojumi: </h1>
    </div>
    <div class="container-fluid">
        <?php
            $travel_group_list_item = new TravelGroupRepository;
            echo '<div class="row">';
            foreach($travel_group_list_item->getTravelGroupList() as $travel_group){
                echo '<div class="col-md-6">';
                $component = new TravelMiniDescriptionComponent($travel_group);
                $component->show();
                echo '</div >';
            }
            echo '</div>';
        ?>
    </div>
</body>

      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
</html>

