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
            <li class="active"><a href="../admin/index.php">Pievienot Ceļojumu<span class="sr-only">(current)</span></a></li>
            <li><a href="../admin/index3.php">Pārvaldīt ceļojumus</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pievienot ceļojumu</h1>

          <div class="table-responsive">
            <table class="table table-striped">
          </div>
          <form method="POST">
					<div class="form-group">
					  <label for="text">Ceļojuma nosaukums</label>
					  <input type="text" class="form-control" name="destination"  placeholder="Ceļojuma nosaukums">
					</div>

					<div class="form-group">
					  <label for="text">Valsts</label>
					  <input type="text" class="form-control"  name="country"  placeholder="Ceļojuma valsts">
					</div>
					<div class="form-group">
					  <label for="text">Vieta</label>
					  <input type="text" class="form-control" name="place"  placeholder="Ceļojuma vieta">
					</div>
					
					<div class="form-group">
					  <label for="text">Ceļojuma apraksts</label>
            <textarea  class="form-control"  rows="4" cols="50" name="description"  placeholder="Īss ceļojuma apraksts"></textarea>
					</div>
					
          <div class="form-group">
            <label for="text">Sākuma datums</label>
            <input type="date" class="form-control" name="start_date">
          </div>

          <div class="form-group">
            <label for="text">Beigu datums</label>
            <input type="date" class="form-control" name="end_date">
          </div>

          <div class="form-group">
					  <label for="text">Cena (par vienu personu)</label>
					  <input type="number" class="form-control"  name="price" placeholder="Cena no vienas personas">
					</div>

          <div class="form-group">
            <label for="text">Attēli</label>
            <input type="file"  class="form-control"  name="fileToUpload" id="fileToUpload">
          </div>
        
					<button type="submit" class="btn btn-default">Pievienot Ceļojumu</button><br>
				  </form>
          <?php echo isset($error_msg) ? $error_msg : "Viss slikti"; ?>
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