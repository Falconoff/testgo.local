<?php 

// подключаем шапку сайта
   include "parts/head.php";

?>

<main>	

<?php
	// если кол-во наших ответов =9, меняем адрес страницы-обработчика
	if(isset($_POST['number']) && $_POST['number'] >= 9) {
		// var_dump($_POST['number']);
?>
		<form id="answer" action="http://testgo.local/final.php" method="POST">
<?php	
	// если кол-во наших ответов меньше 9, остаёмся на этой странице
	} else {
?>
		<form id="answer" action="http://testgo.local/answer.php" method="POST">
<?php 
	};

	// если существует запрос с кодом теста и он не пустой
	if(isset($_POST["test_id"]) && $_POST["test_id"] != "") {
		// запрос названия теста по его коду
		$sql = "SELECT test_name FROM tests WHERE test_id = '" . $_POST['test_id'] . "'";

		$result = mysqli_query($connect, $sql);
		//кол-во записей с одинаковым именем теста
		$num = mysqli_num_rows($result);

		// проверка есть ли в БД такая таблица
		if($num < 1) {echo "<h2>нет теста с таким номером</h2>";}
			else if ($num > 1) {echo "Ошибочка! С таким номером не один тест!";}
				// если такая таблица есть, выводим вопросы
				else {
					// echo "есть тест с таким номером )))"; 
					
					// сохраняем человеческое НАЗВАНИЕ ТЕСТА, тематика
					$res = mysqli_fetch_assoc($result);
					
					// echo($res['test_name']);


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
						}
					}

					// выбрать всё (из нужной таблицы) из одной строки с указанным порядковым номером
					$sql_2 = "SELECT * FROM `" . $_POST['test_id'] . "` LIMIT " . $number . ", 1";
					$res2 = mysqli_query($connect, $sql_2);
					$question = mysqli_fetch_assoc($res2);

?>
			<!-- скрытый инпут для передачи значения кодa теста -->
			<input type="hidden" name="test_id" value=<?php echo ($_POST['test_id']) ?>>
			<!-- скрытый инпут для передачи значения счётчика цикла -->
			<input type="hidden" name="number" value=<?php echo ($number+1) ?>>
			<!-- скрытый инпут для передачи значения номера правильного ответа -->
			<input type="hidden" name="answ_right" value=<?php echo ($question['answ_right']) ?>>
			<!-- скрытый инпут для передачи значения счётчика правильных ответов -->
			<input type="hidden" name="count_right" value=<?php echo ($count_right) ?>>


			<h2>Тема теста: <span id="test_name"> <?php echo($res['test_name']); ?> </span></h2>

			<p>Правильных ответов <?= $count_right ?> из 10</p>

			<div>
				<h3>Вопрос № <span id="num"><?php echo ($number+1) ?></span></h3>
				<p id="question"><?php echo $question['question'] ?></p>

<?php 			// если в этом вопрoсе адрес картинки не пустой (есть картинка), то выводим див с картинкой
				if($question['images'] !== "img/") {
?>				
				<div class="image-question">
					<img src="<?php echo $question['images']; ?>" alt="Вопрос без картинки">
				</div>
<?php 
				} 
?>
				
			</div>
		
			<div>Выберите вариант ответа</div>
			<div>
				<input type="radio" id="answ1" name="answer" value="1" required>
				<label for="answ1"><?= $question['answer_1'];?></label>
			</div>
			<div>
				<input type="radio" id="answ2" name="answer" value="2" required>
				<label for="answ2"><?= $question['answer_2'];?></label>
			</div>
			<div>
				<input type="radio" id="answ3" name="answer" value="3" required>
				<label for="answ3"><?= $question['answer_3'];?></label>
			</div>
			<div>
				<input type="radio" id="answ4" name="answer" value="4" required>
				<label for="answ4"><?= $question['answer_4'];?></label>
			</div>

<?php				
			};
		} else {  // если код таблицы ещё не вводили, отображаем поле ввода
?>

			<h2 class="end">Введите уникальный код теста</h2>
			<input  type="text" name="test_id" required="" >

<?php
	};
?>
			<!-- кнопка для отправки ответа -->
			<input type="submit" name="" value="Далее">
		</form>

</main>        
	
	<!-- <script type="text/javascript" src="js/script-timeout.js"></script> -->

<?php
	// подключаем подвал сайта
   include "parts/footer.php";
?>