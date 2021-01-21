<?php
	include "parts/head.php";
?>

<main>
	<div class = "end">
	<h2>Авторизация</h2>
	<form action="login.php" method="POST">
		<div>
			Введите свой email: <br/>
			<input type="text" name="email">
		</div>
		<div>
			Введите свой пароль: <br/>
			<input type="password" name="password">
		</div>
		<div>
			<button type="submit">Войти</button>
		</div>
	</form>
	<a href= "register.php">Регистрация</a>
	</div>

<?php
if (isset($_POST["email"]) && isset($_POST["password"]) && $_POST["email"] != "" && $_POST["password"] != ""){ 
	$sql = " SELECT * FROM user WHERE email LIKE '" . $_POST["email"] . "' AND password LIKE '" . $_POST["password"] . "'";
	$result = mysqli_query($connect, $sql);
	$col_polzovateley = mysqli_num_rows($result);
	if($col_polzovateley == 1) {
		$polzovatel = mysqli_fetch_assoc($result);
		// создаем куки для хранения данных пользователя
		setcookie("polzovatel_id", $polzovatel["id"], time() + 60*60);
		// переходим на главную
		header("Location: /");

	} else {
		echo "<h2>Пользователь или пароль введены не верно!</h2>";
	}
}
?>

</main>

<?php
	// подключаем подвал сайта
   include "parts/footer.php";
?>