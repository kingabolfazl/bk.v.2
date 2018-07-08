
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>bookmark-newfolder</title>
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
       include ("./newtab.php");

 echo '<div class="jumbotron">
    <div class="container text-left">
      <h1>bookmark</h1>
      <p>New Table...</p>
    </div>
  </div>
  <div class="col-sm-4 col-sm-offset-4">
    <form class="" action="" target="_parent" method="post" >
      <div class="form-group well ">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
          <input class="form-control" name="newtable" type="text" placeholder="Table Name" required>
        </div><br>
      <button class="btn btn-primary" name="submit3" type="submit" id="submit3" value="Table"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
    </div>
    </form>
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
