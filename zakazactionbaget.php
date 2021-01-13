<?php
session_start();

require_once("func.php");

$polz = $_SESSION['userin'];
$art = $_POST['h1'];
$typ = $_POST['h2'];
$sd = date('Y-m-d', strtotime('+1 week'));
$fd = date('Y-m-d', strtotime('now'));
$cena = $_POST['h3'];
$size = $_POST["size"];
$ofor = $_POST["oforml"];
$op = $_POST['opla'];


require("temp/bdvar.php");
$connect = mysqli_connect($local , $user, $password , $data_base);

$result = $connect->query("INSERT INTO purch 
VALUES(null, '$_SESSION[userin]', '$art', '$typ', '$ofor', '$sd','$fd',0,'$size',$cena,0, '$op')");
    
if(!$result)
die("err");

header('Location: thanks.php');
?> 