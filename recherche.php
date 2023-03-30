<?php
include('./connect.php');
$res = $bdd->query("SELECT * FROM Tableaux ");


$data = array();

while ( $row = $res->fetch())  {
   $data[] = $row;
}
die(json_encode($data));
?>