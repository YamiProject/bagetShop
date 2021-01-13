<?php
session_start();

require_once("func.php");

$a = $_POST["ar"];
$c = $_SESSION['userin'];
require("temp/bdvar.php");
$connect = mysqli_connect($local , $user, $password , $data_base);

$result = $connect->query("UPDATE purch 
    SET compl=1
    WHERE purch_id=$a and email='$c'");
    
if(!$result)
die("err");

header('Location: profile.php');
?> 