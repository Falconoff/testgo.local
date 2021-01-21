<?php 
//  Подключаємо БД !!
include 'configs/db.php';
include "configs/settings.php";
$page = 'create';

 ?>

<?php 

if(isset($_POST["name_of_table"]) && $_POST["name_of_table"] != "" && isset($_POST["go_sms"])){
	
	
		// переменная для хранения имени рандомной таблици 
		$random_num = $_POST["name_of_table"];
		$test_name = $_POST["test_name"];

		// Запрос на создание рандомной таблицы
		$sql_table = "CREATE TABLE `$random_num` ( `id` INT NOT NULL AUTO_INCREMENT , `question` TEXT NOT NULL, `images` VARCHAR(255) NOT NULL , `answer_1` VARCHAR(255) NOT NULL , `answer_2` VARCHAR(255) NOT NULL , `answer_3` VARCHAR(255) NOT NULL , `answer_4` VARCHAR(255) NOT NULL , `answ_right` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
			

		if(mysqli_query($connect, $sql_table)){
			// Запрос на внисение информации в общую БД тестов 
			$sql_tests = "INSERT INTO `tests`(`test_id`, `test_name`) 
				VALUES ('".$random_num."', '".$test_name."')";

			mysqli_query($connect, $sql_tests);
			// Установка переменной  для сесии
			session_start();
			/*$_SESSION["name_of_table"] = $_POST["name_of_table"];*/
			$_SESSION["name_of_table"] = $random_num;
			
			echo "<h2> Текст внесли</h2>";
			header("Location: /add.php");
		}
		else{
			echo "<h2>Произошла ошибка текста</h2>";
			printf("Connect failed: %s\n", mysqli_connect_error());
			printf("Errormessage: %s\n", mysqli_error($connect));
		}
			
}
?>


<?php
	//  шапка для сайта подключина
	include "parts/head.php";
?>

<main>

<!-- 
  2 страницы:
1 - create.php - вводим название темы тестирования и генерим код теста/таблицы в БД; создаём таблицу в БД с именем = сгенерированному коду
2 - add.php - страничка с формой для добавления в только что созданную таблицу вопросов 
-->
	
	<div class="end">

		<form id="form" method="POST">
			<h3>Скопируйте и сохраните сначала этот ключ к Вашему тесту: </h3>
			<!-- НОМЕР ТЕСТА (ТАБЛИЦЫ) -----результат-function getRnd()----->
			<input id="test_rendom"  name="name_of_table" type="text" value="тут буде номер тесту"> 
			
			<div id="title_color">Введите тему тестирования</div>
			
			<textarea name="test_name" required="" rows="3" cols="20"></textarea>
			<button class="avatar" type="submit" name="go_sms">
				<img src="image/send.png">
			</button>
		</form>

	</div>

</main>

<script src="js/script-random.js"></script>

<?php
	// подключаем подвал сайта
   include "parts/footer.php";
?>