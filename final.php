
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
<?php 
		// подключаем шапку сайта
		include "parts/head.php";
	?>
<main>
<body>
	

	<!-- ======================= основной блок ============================= -->
	
	

<?php 
	// если существует запрос с кодом теста и он не пустой
	if(isset($_POST["test_id"]) && $_POST["test_id"] != "") {
		// запрос названия теста по его коду
		$sql = "SELECT test_name FROM tests WHERE test_id = '" . $_POST['test_id'] . "'";
		$result = mysqli_query($connect, $sql);
		$res = mysqli_fetch_assoc($result);

		// переменная для номера теста
		$number = 0;
		// если уже ответили на 1-й вопрос, то 
		if(isset($_POST["number"])) {
			// заносим в номер число из запроса
			$number = $_POST["number"];
		};

		// счётчик правильных ответов
		$count_right = 0;
		if(isset($_POST["answer"])) {
			// если номер ответа пользователя равен номеру правильного ответа
			if($_POST["answer"] == $_POST['answ_right']) {
				// +1 счётчику правильных ответов
				$count_right = $_POST['count_right'] + 1;
			} else {
				// иначе счётчик не изменяем
				$count_right = $_POST['count_right'];
			};
		};


		// заносим результат тестирования пользователя в БД
		$sql_3 = "INSERT INTO `results` (`id`, `user_id`, `test_id`, `result`, `date`) VALUES (NULL, '".$polzovatel['name']."', '" . $_POST['test_id'] . "', '" . $count_right . "', CURRENT_TIME());";
		$res_3 = mysqli_query($connect, $sql_3);
	}
?>

             <div class = "end">
  <h2>Ваш результат: <?php echo $polzovatel["name"]; ?></h2>
  
		<h2>Тема теста: <span id="test_name"> <?php echo($res['test_name']); ?> </span></h2>

			<h2>Правильных ответов <?= $count_right ?> из 10</h2>

			<div>
				<a href="/">
					<?php
                // setcookie("polzovatel_id","",0);

                       ?>

					<button class="to-main">На главную</button>
				</a>
			</div>
</div>
	
	
	<!-- <script type="text/javascript" src="js/script-timeout.js"></script> -->

<?php
	// подключаем подвал сайта
   include "parts/footer.php";
?>