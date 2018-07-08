
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>bookmark</title>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
  <?php require_once ("./page.php");?>
</head>
<body style="background-color:#222222;">
<header>
<?php
  include('./login.php');

  if(!empty($_SESSION['login_user'])){
	   include ("./navbar.php");


 echo '<div class="jumbotron">
    <div class="container text-left">
      <h1>bookmark</h1>
      <p>readmarkable...</p>
    </div>
  </div>
  <div class="container">
  <div class="container row">
  <div class="col-sm-4 well">
    <p><?php include("./txt/loremipsum.txt");?></p>
  </div>
  <div class="col-sm-8">
      <form class="" action="" target="_parent" method="get" >
        <div class="form-group well">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
            <input class="form-control" name="newname" type="text" placeholder="Name">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
            <input type="url"  class="form-control" name="newurl"  placeholder="http://beispiel.com" required><br>
          </div>
          <br>
          <label for="comment">Bemerkung:</label>
          <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
          <br>
        <button class="btn btn-primary" type="submit" id="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
      </div>
      </form>
    <!--_SIDEBAR_________________________________________________________________-->
  </div>
</div>
  </div>';}
  if(empty($_SESSION['login_user'])){
	   include ("./navbar.php");
    echo "<div id='profile' class='alert alert-success alert-warning'>
  <b class='glyphicon glyphicon-user'></b></b><b id='welcome' >Du Muass Anmelden um dieese seite  zu sehen!</b>
  </div>";
echo "<body onload=\"setTimeout('history.back()', 2000);\">";
  }
?>
</body>
