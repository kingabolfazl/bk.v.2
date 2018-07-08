<?php
if (isset($_POST['submit3'])) {
	require('./connect.php');
	
	$newtable = $_POST['newtable'];
	$newtableid = $_GET['newtableid'];

$db->query('create table '.$newtable.'( id INT NOT NULL AUTO_INCREMENT, name VARCHAR(225) NOT NULL, url VARCHAR(225) NOT NULL, text TEXT, pic VARCHAR(225) NOT NULL, datum DATE, PRIMARY KEY ( id ) )') and ('INSERT INTO `folderassign` (id,folder,bookmarks) VALUES (NULL,"'.$newtableid.'","'.$newtable.'")');
  echo "
      <div class='alert alert-success alert-dismissable' id='success-del'>
      <a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong><i class='glyphicon glyphicon-floppy-saved'></i>  Eintrag gespeichert!</strong>";
  }
?>
