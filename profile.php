<?php
session_start();
require_once("func.php");

$polz = profilepolz($_SESSION['userin']);

$zakaz = zakazpolzact($_SESSION['userin']);
$zakaz2 = zakazpolzgotov($_SESSION['userin']);
$zakaz3 = zakazpolzpoluch($_SESSION['userin']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link href="bagetcss.css">
</head>
<body>
    <?php
    print(template_headfoot("header.php"));
    ?>
    
    <div class="container">
        
    <div class="mini abouttype imgprofile abouttypefilter">
            <div>
                <h1>Профиль</h1>
            </div>
        </div>

        <div class='polzdata'>
        <?php foreach($polz as $value)
        echo "
        <span>E:mail:". $value['email']."</span><br>
        <span>Имя: ". $value['name']."</span><br>
        <span>Фамилия: ". $value['familiya']."</span><br>
        <span>Телефон: ". $value['number']."</span><br>
        ";

        if($zakaz)
        {
        echo "<h2>Активные заказы</h2>
        <div class='polzpoz'>";
        foreach($zakaz as $value)
        echo "<div class='zakazpolzblock'>Артикль: ".$value["arcticle"]."<br>Тип: ".$value["typ"]."<br> Оформление для: ".$value['dlya']." 
        <br>Размер: ".$value['size']." <br>Дата заказа: ".$value['zakd']." <br>Дата выполнения: ".$value['zakc']." 
        <br>Цена: ".$value['cena']." <br>Стутус: Ожидание выполнения<br></div>";
        echo "</div>";
        }

        if($zakaz2)
        {
        echo "<h2>Готовые заказы</h2>
        <div class='polzpoz'>";
        foreach($zakaz2 as $value)
        echo "<form action='poluch.php' method='post' class='zakazpolzblock'>
        <input type='hidden' value='".$value["id"]."' name='ar'>
        Артикль: ".$value["arcticle"]."<br>Тип: ".$value["typ"]."<br> Оформление для: ".$value['dlya']." 
        <br>Размер: ".$value['size']." <br>Дата заказа: ".$value['zakd']." <br>Дата выполнения: ".$value['zakc']." 
        <br>Цена: ".$value['cena']." <br>Стутус: Доставлено<br><input type='submit' value='Получить'></form><br><br>";
        echo "</div>";
        }

        if($zakaz3)
        {
        echo "<h2>Полученные заказы</h2>
        <div class='polzpoz'>";
        foreach($zakaz3 as $value)
        if($value['otz']=='0')
        echo "<form action='otziv.php' method='post' class='zakazpolzblock'>
        <input type='hidden' value='".$value["id"]."' name='ar'>
        <input type='hidden' value='".$value["arcticle"]."' name='art'>
        Артикль: ".$value["arcticle"]."<br>Тип: ".$value["typ"]."<br> Оформление для: ".$value['dlya']." 
        <br>Размер: ".$value['size']." <br>Дата заказа: ".$value['zakd']." <br>Дата выполнения: ".$value['zakc']." 
        <br>Цена: ".$value['cena']." <br>Стутус: Получено<br>
        <input type='hidden' value='".$value["id"]."' name='ar'>
        <textarea name='comm'></textarea>
        <input type='submit' value='Оставить отзыв'></form><br><br>
        ";
        else
        echo "<div class='zakazpolzblock'>
        <input type='hidden' value='".$value["id"]."' name='ar'>
        Артикль: ".$value["arcticle"]."<br>Тип: ".$value["typ"]."<br> Оформление для: ".$value['dlya']." 
        <br>Размер: ".$value['size']." <br>Дата заказа: ".$value['zakd']." <br>Дата выполнения: ".$value['zakc']." 
        <br>Цена: ".$value['cena']." <br>Стутус: Получено</div><br>";
        
        echo "</div>";
        }
        

        ?>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>

        <form action="logoutaction.php" style='margin-bottom:-100px'>
            <input type="submit" value="Выйти">
        </form>
    </div>

    <?php
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>