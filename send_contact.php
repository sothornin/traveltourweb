<?php
$mysqli = new mysqli("localhost","root","","webproj");



$query = "INSERT INTO contact(name, email, phone, message) VALUES (?,?,?,?)";
$stmt = $mysqli->prepare($query);
$stmt -> bind_param("ssss",$_POST["name"],$_POST["email"],$_POST["phone"],$_POST["message"]);
$stmt -> execute();


$mysqli -> close();
$data = array("result"=> true);
header('Content-Type: application/json');
echo json_encode($data);
