<?php
	include "parts/head.php";
?>
<!-- ==== страница регистрации ==== -->
<main>
	<div class = "end">
		<h2>Регистрация</h2>
		<form action="register.php" method="POST">
			<div>
				Введите ваше имя: <br/>
				<input type="text" name="name">
			</div>
			<div>
				Введите свой email: <br/>
				<input type="text" name="email">
			</div>
			<div>
				Введите свой пароль: <br/>
				<input type="password" name="password">
			</div>
			<div>
				<button type="submit">Зарегистрироваться</button>
			</div>
		</form>
		<a href= "login.php">Авторизация</a>
	</div>

<?php

if (isset($_POST["name"]) && isset($_POST["email"]) && $_POST["password"] != "" && $_POST["password"] != "") {
	
	$sql = " INSERT INTO user ( name, email, password ) VALUES ('". $_POST["name"] ."','". $_POST["email"] ."','". $_POST["password"] ."')";
	if(mysqli_query($connect,$sql)){
		echo "<h2>Пользователь добавлен</h2>";
	} else {
		echo "<h2>Произошла ошибка</h2>";
	}
}
?>

</main>

<?php
    // подключаем подвал сайта
   include "parts/footer.php";
?>