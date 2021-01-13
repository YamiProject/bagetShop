<?php

require_once("func.php");

$email = $_POST["email"];
$passw = $_POST["p1"];
$name = $_POST["name"];
$familiya = $_POST["familiya"];
$number = $_POST["number"];


$proverit = checkusers();

$oshibkaexist=false; 

$exist = false; 
$passss = false;
$numberrrr = false;

foreach($proverit as $value)
{
    if($value==$email)
    {
    $oshibkaexist = true;
    $exist=true;
    }
}

if(strlen($passw)<8)
{
$passss = true;
$oshibkaexist = true;
}

if(strlen($number)!=11 || is_numeric($number)==false)
{
$numberrrr = true;
$oshibkaexist = true;
}

if($oshibkaexist==false)
{
    require("temp/bdvar.php");
    
    $connect = mysqli_connect($local , $user, $password , $data_base);

    $result = $connect->query("INSERT INTO polzovatel 
    VALUES('$email','$passw','$name','$familiya','$number')");
    
    if(!$result)
    die("err");


    session_start(['cookie_lifetime' => 86400]);
    $_SESSION['userin']=$email;
    header('Location: profile.php');
}
else
{
    session_start(['cookie_lifetime' => 86400]);

    if($exist==true)
    $_SESSION["userexist"] = true;

    if($passss==true)
    $_SESSION["passwerror"] = true;

    if($numberrrr==true)
    $_SESSION["numbererror"] = true;

    header('Location: error2.php');

}
?>