<link href="bagetcss.css" rel="stylesheet">
<script src="jsfunc.js"></script>
</head>
<body>
<header>
		<div class="sitehead">
				<div class="mainheadlogin">
				<div class="logotypeh"></div>
				<div class="headcontact">+7 888 787-56-56 <br>+7 828 722-11-51</div>
				<div class="loginblock">
				<?php
				if(!isset($_SESSION['userin']))
				echo "
				<div  id='p'><a class='logbut' id='lo' onclick='change()'><input class='logbut' type='button' value='Войти'></a><br>
					<a class='logbut' href='reg.php'><input class='logbut' type='button' value='Регистрация'></a>
					</div>
				<div id='v' hidden>
				<form action='loginaction.php' method='POST'>
				E-mail: <input type='text' name='em' required><br>
				Пароль: <input type='password' name='ps' required><br>
				<input type='submit' value='Войти'>
				</form>
				</div>	
					";
				else 
				echo "<div class='loginblock'><a href='profile.php'>Личный кабинет</a></div>";
				?>
				</div>
				</div>

				<div class="mainnavigation">
					
                    	<a href="index.php">Главная страница</a>
						<a href="baget.php">Каталог багетов</a>
                        <a href="paspartuu.php">Каталог паспарту</a>
						<a href="gallery.php">Галерея</a>
						<a href="review.php">Отзывы</a>
						<a href="howtofindus.php">Как нас найти?</a>	
					</ul>
				</div>
		</div>
    </header>