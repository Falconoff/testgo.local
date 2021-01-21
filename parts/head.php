<?php 
	// подключаем БД
	include "configs/db.php";
	// подключаем файл с настройками
	include "configs/settings.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $nameSite ?> </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	
<!-- header -->
<div id = "shapka" >
	<!-- Logo -->
	<div id = "logo">
		<img src="/image/logo.png">
		<span><b>Test</b><i>GO</i></span>
	</div>
<?php
		if(isset($_COOKIE["polzovatel_id"])){
			$sql = "SELECT * FROM user WHERE id=" . $_COOKIE["polzovatel_id"];
			$result = mysqli_query($connect, $sql);
			$polzovatel = mysqli_fetch_assoc($result);
?>
			<div class="name">
				Вы авторизованы как <?= $polzovatel["name"] ?>
			</div>
<?php 
		}
?>
	<!-- модальное окно с текстом Помощи -->
	<div class= "modal" id="help-modal">
		<div class="close">x</div>
		<p>Для работы Вам необходимо зарегистрироваться. После авторизации доступны опции "Создать тест" и "Пройти тест". <br> В режиме "Создать тест" автоматически создаётся ключ-идентификатор для Вашего теста. <br> ВАЖНО!!! Этот ключ необходимо скопировать и сохранить у себя, т.к. именно при помощи него возможно будет прохождение Вашего теста другим пользователям! Далее заполняете поле с общим названием темы тестирования, нажимаете на кнопку и осуществляется переход к форме ввода вопросов и вариантов ответа. Тут же предусмотрена возможность загрузить картинку для вопроса и её разворота. Тест должен состоять из 10 вопросов. <br> В режиме "Пройти тест" требуется сначала ввести ключ-идентификатор теста, который может сообщить Вам создатель тестирования. Далее начинается тестирование, состоящее из 10 вопросов и 4-х вариантов ответа к каждому (правильный ответ только один!).
		<p/>
		<!-- <div class="content">
			
		</div> -->
		
		
	</div>

	<!-- блок с кнопками Помощь, Войти/Выйти -->
	<div id = "menu">
		<a href="#" id="open_help">Помощь</a>
<?php
		if(isset($_COOKIE["polzovatel_id"])){
		// 	$sql = "SELECT * FROM user WHERE id=" . $_COOKIE["polzovatel_id"];
		// 	$result = mysqli_query($connect, $sql);
		// 	$polzovatel = mysqli_fetch_assoc($result);
?>
				
			<a href="vihod.php">Выйти</a><!-- Выйти-->
			<!-- <a href="vihod.php"><//?php echo $polzovatel["name"]?> &#9760</a> -->

<?php
		} else{
?>
			<a href="login.php">Войти</a><!-- Войти-->
<?php
		}
		?>
		
	</div>
</div>