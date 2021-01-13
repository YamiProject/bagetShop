<?php
session_start();
require_once("func.php");
if(isset($_SESSION["oshibkalogin"]))
$oshibka = "Ошибка при вводе логина или пароля.";
else
$oshibka = null;
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
                    
    <div class="mini abouttype imgvhod abouttypefilter">
            <div>
                <h1>Вход</h1>
            </div>
        </div>

        <form action="loginaction.php" method='POST' class="vhodnayaforma">
                    <label for="email">E-mail</label><br>
                    <input type="email" name="em" required><br><span></span><br>

                    <label for="ps">Пароль</label><br>
                    <input type="password" name="ps" id="pas1" required><br><span></span><br>

                    <p><?php echo $oshibka?></p>
                    <input type="submit" class="rebuttonnoactive" value="Войти">
               
        </form> 
              
            
    </div>

    <?php
    session_unset();
    print(template_headfoot("footer.php"));
    ?>
</body>
</html>