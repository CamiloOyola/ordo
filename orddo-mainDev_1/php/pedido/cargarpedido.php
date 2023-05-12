<?php
require_once('../connection.php');

header("Content-type: text/html; charset=utf-8");

$sql= "SELECT * FROM producto";

$result= $connection->query($sql);

$salida=array("data"=>array());


$row=$result->fetch_array();

$salida["data"][]=array($row[1],$row[3]);

$connection->close();

echo json_encode($salida);


?>