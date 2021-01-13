<?php
session_start();

require_once("func.php");
$art = $_POST["h1"];
$typ = $_POST["h2"];
$cena = $_POST["h3"];
$op = $_POST['opla'];

$fd = date('Y-m-d', strtotime('now'));
$sd = date('Y-m-d', strtotime('+3 days'));
 

require("temp/bdvar.php");
$connect = mysqli_connect($local , $user, $password , $data_base);

$result = $connect->query("INSERT INTO purch 
VALUES(null, '$_SESSION[userin]', '$art', '$typ',null, '$sd','$fd',0,null,$cena,0, '$op')");
    
if(!$result)
die("err");

header('Location: thanks.php');

?> 