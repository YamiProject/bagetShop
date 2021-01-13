<?php
session_start();
require_once("func.php");

$a = otzivifull();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Багет</title>
    <link href="bagetcss.css">
</head>
<body>
    <?php
    print(template_headfoot("header.php"));
    ?>
    
    <div class="container">

        <div class="abouttype imgotzivi abouttypefilter">
            <div>
                <h1>Отзывы</h1>
            </div>
        </div>

        
        
        <div class="catalog">
        
        <?php foreach($a as $value)
        {
            echo  "<div class='otzivblock otzivlock2'>
            <h3>".$value["polz"]."</h3>
                <h3>Товар:".$value['article']."</h3>
            <hr>
            <p>".$value["text"]."
            
        </div>";
        }
         ?>
        </div>
            
    </div>

    <?php
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>