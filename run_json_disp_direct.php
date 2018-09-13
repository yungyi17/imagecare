<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//$conn = new mysqli("localhost", "root", "", "world") or die("Connect failed: %s\n". $conn -> error);;
require('connect.php');

$result = $conn->query("SELECT description, location FROM upload");
$outp = "";

while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Description":"'  . $rs["description"] . '",';
    $outp .= '"Location":"'. $rs["location"]     . '"}';
}

$outp = '['.$outp.']';
$conn->close();

//echo($outp);

define("ROOTPATH", __DIR__);
file_put_contents(ROOTPATH . '/json/imagefile.json', $outp);
?>