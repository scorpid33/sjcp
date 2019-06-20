<?php 
require_once('AddTravelGroup.php');
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
            <li class="active"><a href="../admin/index.php">Pievienot Ceļojuma grupu<span class="sr-only">(current)</span></a></li>
            <li><a href="TravelGroupListView.php">Pārvaldīt ceļojumu grupas</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pievienot ceļojumu grupu</h1>

          <div class="table-responsive">
            <table class="table table-striped">
          </div>
          <?php 
          if (isset($error_msg)) { 
            echo "<div class='alert alert-info' role='alert'>
            ".$error_msg."
          </div>";
          } 
          ?>
          <form method="POST">
					<div class="form-group">
					  <label for="text">grupas nosaukums</label>
					  <input type="text" class="form-control" name="destination"  placeholder="Ceļojuma nosaukums">
					</div>

					<div class="form-group">
					  <label for="text">Ceļojuma apraksts</label>
            <textarea  class="form-control"  rows="4" cols="50" name="description"  placeholder="Īss ceļojuma apraksts"></textarea>
					</div>
					
          <div class="form-group">
            <label for="text">Ceļojums</label>
            <select>
          <option value="">Galmērķis 1</option>
          <option value="">Galamērķis 2</option>
          <option value="">Galamērķis 3</option>
          <option value="">Galamērķis 4</option>
          </select>
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
        </table>
        <div class="text-right"> 
          <input type="button" class="btn btn-success" value="Pievienot dalībniekus">
        </div>
        
					<button type="submit" class="btn btn-default">Pievienot Ceļojumu</button><br>
				  </form>
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
