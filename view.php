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
    ul {
      list-style-type: none;
    }
  </style>
  <?php require ("./page.php");?>
</head>
<body style="background-color:#222222;">
<header>

  <?php include("./navbar.php"); ?>
 

  <div class="jumbotron"></div>

  <div class="container">
  <div class="container row">
  <!--_SIDEBAR_________________________________________________________________-->
  <div class="col-sm-4">
  
  <!--_SIDEBAR2_________________________________________________________________-->
  <div style="margin-bottom:-1.5em; background-color:#428bca;"class="well bg-primary"><h3 class=""><h2>Verzeichnis</h2></div>
  <div style="margin-top:0;" class="well">
      <ul class='list-unstyled'>
        <?php include("./folder.php"); ?>
      </ul>
  </div>
  <!--_________________________________________________________________________-->
  </div>
  <!--_TABLE___________________________________________________________________-->
  <div class="col-sm-8">
    <?php include('./editform.php'); ?>
    <?php if(!empty($_GET['search']) && empty($_GET['id']) && empty($_GET['delid'])){include("search.php");}?>
    <?php if(!empty($_GET['delid']) or !empty($_GET['delete'])){require("delete.php");}?>
    <?php if(empty($_GET['newname'])){$_GET['newname']='unbenannt';}?>
    <?php if(!empty($_GET['newurl'])){require("save.php");}?>
    <?php if(!empty($_GET['editname']) or !empty($_GET['editurl'])){require("edit.php");}?>
    <div class="well">
    <table class="table table-striped" id="table">
      <!--ColNames-->
	   <tr><?php echo "<h2><i class='text-success glyphicon glyphicon-bookmark'> ".$table."</i></h2>";?></tr>
	  <tr>
        <th>Name</th>
        <th>URL</th>
        <!--PageManage-->
        <th class='text-center'><?php
          include("./page.php")
        ?></th>
        <!---->
      </tr>
      <!---->
      <?php include('./viewtable.php');?>
    </table>
  </div>
  </div>
  <!--_________________________________________________________________________-->
  </div>
  </div>

  <!--_MAINCONTAINER/ENDE______________________________________________________-->
  </body>
  </html>
