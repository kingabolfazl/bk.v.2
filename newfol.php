<?php
if (isset($_POST['submit2'])) {
	require('./connect.php');
$newfolder = $_POST['newfolder'];

$sql = 'INSERT INTO `folder` (`id`, `name`) VALUES (NULL, "'.$newfolder.'")';
$result = $db->query($sql);

if (!$result) {
  die ('Etwas stimmte mit dem Query nicht: '.$db->error);}
  while($row = $result){
	  
echo "<body onload=\"setTimeout('./index.php', 2000);\">";
}
}
?>
