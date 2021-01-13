<?php

function template_headfoot($file) 
{
    if (!file_exists("temp/$file")) {
        die("File not ex");
    }

    ob_start();
    require("temp/$file");
    $result = ob_get_clean();
    return $result;
}

function checkusers()
{   
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);

    $result = $connect->query("SELECT email FROM polzovatel");

    $rows = $result->num_rows;

    $emails = array();

    for ($j=0;$j<$rows;++$j)
    {
        $result->data_seek($j);
        $data = $result->fetch_array(MYSQLI_NUM);

        $emails[$j]=$data[0];
    }

    $a = $emails;
   
    return $a;
}


function bagetlist()
{
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);
    
    $baget = array();

    $result = $connect->query("SELECT * FROM tovar where typeoftovar='Baget'");


    $rows = $result->num_rows;

    for ($i=0;$i<$rows;++$i)
    {
        $result->data_seek($i);
        $data = $result->fetch_array(MYSQLI_NUM);

        array_push($baget, array("article"=>$data[0], "price"=>"$data[1]", "typ" =>$data[2], "img"=>"$data[3]"));
    }

    $connect->close();

    return $baget;
}

function paspartulist()
{
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);
    
    $paspartuu = array();

    $result = $connect->query("SELECT * FROM tovar where typeoftovar='Paspartu'");


    $rows = $result->num_rows;

    for ($i=0;$i<$rows;++$i)
    {
        $result->data_seek($i);
        $data = $result->fetch_array(MYSQLI_NUM);

        array_push($paspartuu, array("article"=>$data[0], "price"=>"$data[1]", "typ"=>"$data[2]", "img"=>"$data[3]"));
    }

    $connect->close();

    return $paspartuu;
}

function otzivi()
{
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);
    
    $otz = array();

    $result = $connect->query("SELECT * FROM otzivi LIMIT 3");


    $rows = $result->num_rows;

    for ($i=0;$i<$rows;++$i)
    {
        $result->data_seek($i);
        $data = $result->fetch_array(MYSQLI_NUM);

        array_push($otz, array("polz"=>$data[0], "text"=>"$data[2]", "article"=>"$data[3]"));
    }

    $connect->close();

    return $otz;
}

function otzivifull()
{
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);
    
    $otz = array();

    $result = $connect->query("SELECT * FROM otzivi");


    $rows = $result->num_rows;

    for ($i=0;$i<$rows;++$i)
    {
        $result->data_seek($i);
        $data = $result->fetch_array(MYSQLI_NUM);

        array_push($otz, array("polz"=>$data[0], "text"=>"$data[2]", "article"=>"$data[3]"));
    }

    $connect->close();

    return $otz;
}

function profilepolz($em)
{
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);

    $result = $connect->query("SELECT * FROM polzovatel WHERE email='$em'");

    $rows = $result->num_rows;

    $polz = array();

    for ($j=0;$j<$rows;++$j)
    {
        $result->data_seek($j);
        $data = $result->fetch_array(MYSQLI_NUM);

        array_push($polz, array("email"=>$data[0], "name"=>"$data[2]", "familiya"=>"$data[3]", "number"=>$data[4]));
    }
   
    return $polz;
}

function zakazpolzact($em)
{
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);

    $result = $connect->query("SELECT * FROM purch WHERE email='$em' and compldate>now()");

    if(!$result)
    die("error");
    $rows = $result->num_rows;

    $zak = array();

    for ($j=0;$j<$rows;++$j)
    {
        $result->data_seek($j);
        $data = $result->fetch_array(MYSQLI_NUM);

        array_push($zak, array("arcticle"=>$data[2], "typ"=>"$data[3]", 
        "dlya"=>"$data[4]", "zakd"=>$data[6], "zakc"=>"$data[5]", 
        "size"=>"$data[8]","cena"=>$data[9]));
    }
   
    return $zak;
}

function zakazpolzgotov($em)
{
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);

    $result = $connect->query("SELECT * FROM purch WHERE email='$em' and compldate<now() and compl=0");

    if(!$result)
    die("error");
    $rows = $result->num_rows;

    $zak = array();

    for ($j=0;$j<$rows;++$j)
    {
        $result->data_seek($j);
        $data = $result->fetch_array(MYSQLI_NUM);

        array_push($zak, array("id"=>$data[0], "arcticle"=>$data[2], "typ"=>"$data[3]", 
        "dlya"=>"$data[4]", "zakd"=>$data[6], "zakc"=>"$data[5]", 
        "size"=>"$data[8]","cena"=>$data[9]));
    }
   
    return $zak;
}

function zakazpolzpoluch($em)
{
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);

    $result = $connect->query("SELECT * FROM purch WHERE email='$em' and compl=1");

    if(!$result)
    die("error");
    $rows = $result->num_rows;

    $zak = array();

    for ($j=0;$j<$rows;++$j)
    {
        $result->data_seek($j);
        $data = $result->fetch_array(MYSQLI_NUM);

        array_push($zak, array("id"=>$data[0], "arcticle"=>$data[2], "typ"=>"$data[3]", 
        "dlya"=>"$data[4]", "zakd"=>$data[6], "zakc"=>"$data[5]", "otz"=>$data[7], 
        "size"=>"$data[8]","cena"=>$data[9]));
    }
   
    return $zak;
}
?>