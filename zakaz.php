<?php
session_start();
require_once("func.php");

$a = $_POST["ty"];
$b = $_POST["ar"];
$c = $_POST["pr"];
$d = $_POST["pic"];

if(!isset($_SESSION['userin']))
header("Location: error.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказ </title>
    <link href="bagetcss.css">
</head>
<body>
    <?php
    print(template_headfoot("header.php"));
    ?>
    
    <div class="container">

    <div class="mini abouttype imgzakaz abouttypefilter">
            <div>
                <h1>Заказ</h1>
            </div>
        </div>

    <?php
    echo "<img src='$d'>";
    if($a=="Baget")
    echo "
    <form action='zakazactionbaget.php' method='POST' class='vhodnayaforma'>
    <div>
    <input type='hidden' name='h1' value='$b'>
    <input type='hidden' name='h2' value='$a'>
    <input type='hidden' name='h3' value='$c'>
    Наименование товара: $b <br>
    Тип товара: $a <br>
     
    Оформление багета для: <select name='oforml'>
                        <option selected value='Картины'>Картин</option>
                        <option value='Зеркало'>Зеркал</option>
                    </select><br>

    Размер: <select name='size'>
                <option selected >менее 10см</option>
                <option>от 10 до 20см</option>
                <option>от 20 до 30см</option>
                <option>от 30 до 40см</option>
                <option>более 40см</option>
            </select><br>

    Дата заказа: ".date('Y-m-d', strtotime('now'))."<br>
    Дата выполнения:". date('Y-m-d', strtotime('+1 week'))." <br>
    Цена: <span>$c</span>
    <br><br>
    Оплата: <select name='opla'>
                <option selected >Наличными/При получении</option>
                <option>По карте/При получении</option>
            </select>
            <br><br>
    <input type='submit' value='оформить'>
    </div>
    </form>
    ";
    else
    echo "
    <form action='zakazactionpaspartu.php' method='POST' class='vhodnayaforma'>
    <div>
    <input type='hidden' name='h1' value='$b'>
    <input type='hidden' name='h2' value='$a'>
    <input type='hidden' name='h3' value='$c'>
    Наименование товара: $b <br>
    Тип товара: $a <br>
  

    Дата заказа: ".date('Y-m-d', strtotime('now'))."<br>
    Дата выполнения:".date('Y-m-d', strtotime('+3 days'))."<br>
    <br>
    Цена:<span>$c</span>
    <br><br>
    Оплата: <select name='opla'>
                <option selected >Наличными/При получении</option>
                <option>По карте/При получении</option>
            </select>
            <br><br>
    <input type='submit' value='оформить'>
    </div>
    </form>
    ";
    ?>
    
    </div>

    <?php
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>