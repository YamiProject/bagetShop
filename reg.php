<?php
session_start();
require_once("func.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    
    <?php
    print(template_headfoot("header.php"));
    ?>
    
    <div class="container">
                 
    <div class="mini abouttype imgreg abouttypefilter">
            <div>
                <h1>Регистрация</h1>
            </div>
        </div>

        <form action="regaction.php" method="POST" class="vhodnayaforma">
                    <label for="email">E-mail</label><br>
                    <input type="email" name="email" required><br>
                    <span></span><br>

                    <label for="p1">Пароль</label><br>
                    <input type="password" name="p1" id="pas1" required><br>
                    <span></span><br>
                    
        
                    <label for="first_name">Имя:</label><br>
                    <input type="text" name="name" required><br>
                    <span></span><br>

                    <label for="familiya">Фамилия:</label><br>
                    <input type="text" name="familiya" required><br>
                    <span></span><br>

                    <label for="number">Номер телефона:</label><br>
                    <label>+</label><input type="text" maxlength="11" name="number" required><br><span></span><br>
                

                    <input type="submit" value="Зарегистрироваться">
              
        </form> 
              
            
    </div>

    <?php
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>