<?php
session_start();
require_once("func.php");

$a = otzivi();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Официальный сайт "Багет, вам привет!"</title>

    <?php
    print(template_headfoot("header.php"));
    ?>
    
    <div class="container">

        <div class="imgcontainer">
            <div class="img1" onclick="location.href='gallery.php'"></div>
            <div class="subimg">
                <div class="img2" onclick="location.href='gallery.php'"></div>
                <div class="img3 onclick="location.href='gallery.php'""></div>
               <div class="img4" onclick="location.href='gallery.php'"></div>
            </div>
        </div>

        <?php if($a)
        {?>
        <div class="abouttype imgotzivi abouttypefilter">
            <div>
                <h1>Последние отзывы</h1>
            </div>
        </div>

        <div class="otzivi">
            <?php foreach($a as $value)

            echo "   
            <div class='otzivblock'>
                <h3>".$value["polz"]."</h3>
                    <h3>Товар:".$value['article']."</h3>
                <hr>
                <p>''".$value["text"]."''
                
            </div>
            </p>";
                ?>
        </div>
        <?php
        }
        ?>

        <div class="abouttype imgonas abouttypefilter">
            <div>
                <h1>О нас</h1>
            </div>
        </div>

        <div class="us">
            
        <p>Багетная мастерская №1 – команда профессионалов, которые любят свое дело! У нас работают талантливые художники, дизайнеры, декораторы. Они создают изысканные изделия, вкладывая в них частичку души. 
        Мастера справляются с задачами любой сложности, поскольку у них имеется опыт и знания!
        Если Вам нужна багетная мастерская в Москве, Вы попали по нужному адресу! 
        Мы занимаемся творческой деятельностью не первый год. За время работы команда специалистов выполнила огромное количество заказов.
        <img src="img/baget3.jpg" width="30%" height="400px" style="float: left;">  К ним относится оформление семейных реликвий, декорирование плазменных панелей, изготовление рамок для икон и многое другое. 
         Наши мастера не боятся трудностей и выполняют заказы, руководствуясь запросами клиентов! Периодически мы проводим специальные акции. 
        Это прекрасная возможность сэкономить денежные средства!Багетная мастерская №1 – Ваш правильный выбор! Ознакомьтесь с нашими услугами и сделайте заказ. 
        Он будет выполнен с душой и в превосходном качестве!</p>

        <p>В чем наши основные преимущества? Перечислим главные аспекты:
        Приемлемая стоимость – багетная мастерская недорого предоставляет качественные услуги по доступной цене. Этот момент высоко ценят наши заказчики.
        Безупречное качество – над созданием изделий трудятся талантливые мастера. Они уделяют внимание деталям и работают на совесть. Поэтому клиентов устраивает качество продукции.<img src="img/baget4.jpg" width="20%" height="200px" style="float: right;">
        Многообразие интересных идей – мастера подбирают подходящие варианты, исходя из особенностей интерьера. У них прекрасно работает фантазия. Поэтому поставленные задачи решаются на высоком уровне.
        Соблюдение сроков – у нас трудятся ответственные сотрудники. Они никогда не подводят клиентов. Все заказы выполняются в оговоренные сроки.
        Предоставление квалифицированных консультаций – к нам можно позвонить и получить ответы на интересующие вопросы.</p>

        </div>
        
    </div>
        <div class="downimg" >ff</div>
    <?php
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>