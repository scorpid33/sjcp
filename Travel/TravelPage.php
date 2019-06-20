<?php
require_once('../class/TravelGroup.php');
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
  <div class="container">
  <div class="form-wrapper">
  <?php
  
  $travel = new TravelGroup;
  $travel->getTravelGroup($_GET['id']);
  echo '
  <div class="text-centered">
    <img class="img-responsive center-block" id="top_image" src="https://images.pexels.com/photos/338515/pexels-photo-338515.jpeg?cs=srgb&dl=architecture-buildings-church-338515.jpg&fm=jpg">
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
        <h3>Pamata informācija:</h3>
    </div>
    <ul class="list-group">
      <li class="list-group-item">
          <div><strong>Valsts:</strong> '.$travel->country.'</div>
      </li>
      <li class="list-group-item">
          <div><strong>Vieta:</strong> '.$travel->place.'</div>
      </li>
      <li class="list-group-item">
          <div><strong>Sakuma datums:</strong> '.$travel->start_date.'</div>
      </li>
      <li class="list-group-item">
          <div><strong>Beigas datums:</strong> '.$travel->end_date.'</div>
      </li>
      <li class="list-group-item">
          <div><strong>Cena:</strong> '.$travel->price.'&#8364 par vienu personu</div>
      </li>
    </ul>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3>Apraksts:</h3>
    </div>
    <div class="panel-body">
      <div>'.$travel->description.'</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3>Attēli:</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-2">
          <img style="width:150px;length:150px;" class="media-object travel-images" src="https://www.croda.com/mediaassets/images/corporate/careers/our-locations/paris-skyline.jpg?la=en-gb&w=1920&focalpointcrop=1&xratio=0&yratio=0&hash=2F851994EF67F93B709C70FF45497926F15CED47">
        </div>
        <div class="col-sm-2">
          <img style="width:150px;length:150px;" class="media-object travel-images" src="https://www.croda.com/mediaassets/images/corporate/careers/our-locations/paris-skyline.jpg?la=en-gb&w=1920&focalpointcrop=1&xratio=0&yratio=0&hash=2F851994EF67F93B709C70FF45497926F15CED47">
        </div>
        <div class="col-sm-2">
          <img style="width:150px;length:150px;" class="media-object travel-images" src="https://www.croda.com/mediaassets/images/corporate/careers/our-locations/paris-skyline.jpg?la=en-gb&w=1920&focalpointcrop=1&xratio=0&yratio=0&hash=2F851994EF67F93B709C70FF45497926F15CED47">
        </div>
        <div class="col-sm-2">
          <img style="width:150px;length:150px;" class="media-object travel-images" src="https://www.croda.com/mediaassets/images/corporate/careers/our-locations/paris-skyline.jpg?la=en-gb&w=1920&focalpointcrop=1&xratio=0&yratio=0&hash=2F851994EF67F93B709C70FF45497926F15CED47">
        </div>
      </div>
    </div>
  </div>
  <a href="/home2.php"><input type="submit" class="btn btn-success" value="Atpakaļ"></a>
  ';
  
  
  ?>
  </div>
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
  
