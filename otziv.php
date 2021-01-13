<?php
session_start();

require_once("func.php");

$a = $_POST["ar"];
$b = $_POST['comm'];
$c = $_SESSION['userin'];
$d = $_POST["art"];
require("temp/bdvar.php");
$connect = mysqli_connect($local , $user, $password , $data_base);

$result = $connect->query("UPDATE purch 
    SET otziv=1
    WHERE purch_id=$a and email='$c'");
    
if(!$result)
die("err");



$result = $connect->query("INSERT INTO otzivi value('$c',null,'$b','$d')");
    
if(!$result)
die("err2");

header('Location: profile.php');

?> 