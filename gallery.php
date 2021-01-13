<?php
session_start();
require_once("func.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея</title>
    <link href="bagetcss.css">
</head>
<body>
    <?php
    print(template_headfoot("header.php"));
    ?>
    
    <div class="container">

        <div class="abouttype imgpgallereya abouttypefilter">
            <div>
                <h1>Галерея</h1>
            </div>
        </div>

        <div class="gal">
            <img src='img/gallery/1.jpg' >
            <img src='img/gallery/2.jpg'>
            <img src='img/gallery/3.jpg'>
        </div>
        
        </div>
            
    </div>

    <?php
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>