<?php 
require_once('../class/TravelGroupRepository.php');
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

    <title>Administratora panelis</title>

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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../admin/index.php">Admin Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../logout.php">Log out</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="CreateTravelGroupView.php">Pievienot Ceļojuma grupu</a></li>
            <li class="active"><a href="TravelGroupListView.php">Pārvaldīt ceļojuma grupas</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Šobrīd pievienotie aktīvie ceļojumi</h1>
      <?php 
      /*$travel_groups = new TravelGroupRepository(); 
      $travel_group = $travel_groups->getTravelGroupItemById($_GET['id']);*/
      ?>
      
      <div class="form-group">
					  <label for="text">Nosaukums</label>
					  <input type="text" class="form-control" value="Spānija"  name="price" placeholder="Cena no vienas personas">
			</div>

      <div class="form-group">
					  <label for="text">Apraksts</label>
					  <input type="text" class="form-control" value="Kaut kāds apraksts"  name="price" placeholder="Cena no vienas personas">
			</div>

      <div class="form-group">
            <label for="text">Dalībnieki</label>
            <table class="table table-striped"> 
            <tr>
              <th>Vārds Uzvārds</th>
              <th>Dzimums</th>
              <th>E-pasts</th>
              <th>Telefona numurs</th>
          </tr>
          <tr>
            <td>Vārds Vārds</td>
            <td>Vīrietis</td>
            <td>aaa@aaa.lv</td>
            <td>2323232323</td>
          </tr>
        </table>
        <div class="text-right"> 
          <input type="button" class="btn btn-success" value="Pievienot dalībniekus">
        </div>

      <input type="button" class="btn btn-info" value="Pievienot dalībniekus">

          <div class="table-responsive">
            <table class="table table-striped">
          </div>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

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
