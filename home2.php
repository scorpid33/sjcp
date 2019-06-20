<?php
include("class/users.php");
include('dbcon.php');
include('auth.php'); 
require_once('./components/TravelList.component.php');
// $profile=new users;
// $profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/TravelPage.css">
  <link rel="stylesheet" href="css/TravelList.css">
  <link rel="stylesheet" href="css/blog.css">
  
</head>
<body>

<div class="container">
<center><h3>Welcome <?php echo $_SESSION['username']; ?> </h3></center>  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Ceļojumi</a></li>
    <li><a data-toggle="tab" href="#menu2">Profile</a></li>
  	<li><a data-toggle="tab" href="#menu3">Blogi</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <?php 
        $component = new TravelListComponent;
        $component->show();
      ?>
    </div>
  

    <div id="menu2" class="tab-pane fade">
      <?php
        include_once("profile.php");
      ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <?php
        include_once("all_blog_list.php");
      ?>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
