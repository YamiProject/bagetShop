<?php
session_start();
require_once("func.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    
    <?php
    print(template_headfoot("header.php"));
    ?>
    
    <div class="container">
                    
            <div>
                <h1>Ошибка!!!</h1>
            </div>
        </div>
        
        <div class='errorblock'>
        <p>При регистрации пользователя были выявлены следующие ошибки:</p>
        <?php
        if(isset($_SESSION["userexist"]))
        echo "<p>Пользователь с такой почтой уже существует</p><br><br>";
        if(isset($_SESSION["passwerror"]))
        echo "<p>Пароль содержит слишком мало символов</p><br><br>";
        if(isset($_SESSION["numbererror"]))
        echo "<p>Неккоректный номер телефона</p>";
        ?>   
        
        <a href="reg.php">Вернутся на страницу регистрации</a> 
        </div>     
    </div>

    <?php
    session_unset();
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>