<?php
session_start();
require_once("func.php");

$a = paspartulist();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Паспарту</title>
    <link href="bagetcss.css">
</head>
<body>
    <?php
    print(template_headfoot("header.php"));
    ?>
    
    <div class="container">

        <div class="abouttype imgpassp abouttypefilter">
            <div>
                <h1>Каталог Паспарту</h1>
            </div>
        </div>

        <div class="filtr">
        </div>
        
        <div class="catalog">
        
        <?php foreach($a as $value)
        {
            echo  "<form action='zakaz.php' method='post'  class='tovarblcok'>
            <div>
                <img src='".$value["img"]."'>
                <input type='hidden' name='ty' value='$value[typ]'>
                <input type='hidden' name='ar' value='$value[article]'>
                <input type='hidden' name='pr' value='$value[price]'>
                <input type='hidden' name='pic' value='$value[img]'>
                <div class='tovarblockingfo'>
            <span>Артекль товара: ".$value["article"]."</span><br>
            <span>Цена: ".$value["price"]."</span><input type='submit' value='Оформить заказ'>
            </div>
            </div>
            </form>";
        }
         ?>
        </div>
            
    </div>

    <?php
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>