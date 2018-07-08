<?php
require ("./connect.php");
require ("./page.php");
if(empty($_GET['search'])){
  $sql = 'SELECT * FROM '.$table.' LIMIT 10 OFFSET '.$offset.'';
  $result = $db->query($sql);
  if (!$result) {
    die ('Etwas stimmte mit dem Query nicht: '.$db->error);}
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td><a target='_blank' href='".$row['url']."'>" .$row['name']. "</td>";
      echo "<td>" .$row['url']. "</a></td>";
      echo "<td></td>";
      echo "</tr>";}}
  else {
    $sql = 'SELECT * FROM '.$table.' WHERE name LIKE "'.$_GET['search'].'"LIMIT 10 OFFSET '.$offset.'';
    $result = $db->query($sql);
    if (!$result) {
      die ('Etwas stimmte mit dem Query nicht: '.$db->error);}
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><a target='_blank' href='".$row['url']."'>" .$row['name']. "</td>";
        echo "<td>" .$row['url']. "</a></td>";
        echo "<td></td>";
        echo "</tr>";}}
?>
