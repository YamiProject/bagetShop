<?php
session_start();
require_once("func.php");
?>

</!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за заказ!</title>

    <?php
    print(template_headfoot("header.php"));
    ?>
    
    
    <div class="container">

    <div class="abouttype imgthanks abouttypefilter">
            <div>
                <h1>Спасибо за заказ!</h1>
            </div>
        </div>

       <br><br>
        <a href='profile.php' style="margin:20px"><input type='button' value='Перейте в профиль'></a><br>
        <a href='index.php' style='margin: 20px'><input type='button' value='На главную'></a>
   
    </div>

    <?php
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>