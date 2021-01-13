<?php

    $email = $_POST["em"];
    $pass = $_POST["ps"];
    
    require("temp/bdvar.php");
    $connect = mysqli_connect($local , $user, $password , $data_base);
    $result = $connect->query("SELECT email, polzpassword  FROM polzovatel");
    $lo = false;
    $rows = $result->num_rows;
    
    for ($i=0;$i<$rows;++$i)
    {
        $result->data_seek($i);
        $data = $result->fetch_array(MYSQLI_NUM);

        
        if($email==$data[0] && $pass==$data[1])
        {
        $lo=true;
        break;
        }
    }

    $connect->close();

    
    if($lo==true)
    {
        session_start(['cookie_lifetime' => 86400*30*30*60]);
        $_SESSION['userin']=$email;
        header('Location: profile.php');   
    }
    else
    {
        session_start(['cookie_lifetime' => 86400*30*30*60]);
        $_SESSION['oshibkalogin'] = true;
        header('Location: error.php');
    }
    
    
    
?>