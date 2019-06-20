<?php 

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
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
          <a class="navbar-brand" href="CreateTravelGroupView.php">Admin Panel</a>
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
            <li><a href="CreateTravelGroupView.php">Pievienot Ceļojumu grupu</a></li>
            <li><a href="TravelGroupListView.php">Pārvaldīt ceļojumu grupas</a></li>
            <li class="active"><a href="UserManagment.php">Lietotāju pārvaldība</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Lietotāji</h1>
          <h2>Sistēmas lietotāji</h2>
          <table class="table">
            <thead>
                <th>Vārds</th>
                <th>Uzvārds</th>
                <th>E-pasts</th>
                <th>Dziumums</th>
                <th>Vēlas Apmeklēt</th>
                <th>Intereses</th>
            </thead>
            <tbody>
            <?php 
            $sql = "Select * from users where type = 'user'";
            $conn = new mysqli('localhost','root','','sjcp');
            if($conn->connect_errno)
            {
                die ("database connection failed".$this->conn->connect_errno);
            }
            $query = $conn->query($sql);
            foreach ($query as $row) { 
                echo    "<tr><td>" . $row['name'] . "</td>
                        <td>" . $row['surname'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['gender'] . "</td>
                        <td>" . $row['wantVisit'] . "</td>
                        <td>". $row['interests'] . "</td>
                        <td><a href='userDelete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                        </td></tr>";
            }
            ?>  
            </tbody>
            </table>
            <ul class="pagination">
            <li><a href="#"><<</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">>></a></li>
            </ul>
            <form method="POST">
            <h2> Administrācija </h2>
            <div class="form-group">
					  <label for="text">Lietotājvārds</label>
					  <input type="text" class="form-control" name="username"  placeholder="Administratora lietotājvārds">
            </div>
            <div class="form-group">
					  <label for="text">Parole</label>
					  <input type="password" class="form-control" name="password"  placeholder="Administratora parole">
            </div>
            <div class="form-group">
					  <input type="submit" class="btn btn-primary" name="add_admin" value="+ Pievienot Administratoru">
            </div>
            </form>
            <?php 
            if (isset($_POST['add_admin'])) { 
                if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] != ''
                && $_POST['password'] != '') { 
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $sql = "INSERT INTO users (username, password, type) VALUES ('". $username . "','". $password . "','admin');";
                    $conn = new mysqli('localhost','root','','sjcp');
                    if($conn->connect_errno)
                    {
                        die ("database connection failed".$this->conn->connect_errno);
                    }           
                    $query = $conn->query($sql);
                    $conn->close();
                    echo "<div class='alert alert-success' role='alert'>
                            Administrators pievienots
                  </div>";
                } else { 
                    echo "<div class='alert alert-primary' role='alert'>
                    Neprecīzi reģistrācijas parametri
                  </div>";
                }
            }
            ?>
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
