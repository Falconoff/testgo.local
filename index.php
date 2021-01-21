<?php
    // подключаем шапку сайта
   include "parts/head.php";

    $polzovatel_id = null; 

    if(isset($_COOKIE["polzovatel_id"])){
    	$polzovatel_id = $_COOKIE["polzovatel_id"];
    }
?>


<!-- <div id = "content">
</div> -->

<!-- модальное окно авторизации -->
<div class="modal_vhod" id="avtorizaziya">
	<div class="close">x</div>
    <div>
        <h2>Логин</h2>
        <textarea id="name"></textarea>
    </div>
	<div>
        <h3>Пароль</h3>
        <textarea id="parol"></textarea>
    </div>
	<button><h1>Войти</h1></button>
</div>


<?php
// если есть POST-запрос с именем, почтой и паролем (из формы регистрации), то добавляем нового пользователя в табл. user
if (isset($_POST["name"]) != "" && isset($_POST["email"]) != "" && $_POST["password"] != ""){
    $sql = " INSERT INTO user ( name, email, password ) VALUES ('". $_POST["name"] ."','". $_POST["email"] ."','". $_POST["password"] ."')";
    if(mysqli_query($connect,$sql)){
        echo "<h2>Пользователь добавлен</h2>";
    }else {
        echo "<h2>Произошла ошибка</h2>";
    }
}

?>

<!-- модальное окно регистрации -->
<!-- <div class="modal_regist" id="register" method="POST">
	
	<div class="close">x</div>
	<h2>Регистрация</h2>
    <form  method="POST">
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
        <a href= "login.php">
            <button type="submit">Зарегистрироваться</button>
           Авторизация
        </a>
    </form>       

</div> -->
<?php

// ============================================================================
// если пользователь авторизовался, отображаем кнопки СОЗДАТЬ и ПРОЙТИ ТЕСТ
if(isset($_COOKIE["polzovatel_id"])){
	$sql = "SELECT * FROM user WHERE id=" . $_COOKIE["polzovatel_id"];
	$result = mysqli_query($connect, $sql);
	$polzovatel = mysqli_fetch_assoc($result);
	?>
    <div class="buttons-block">
        <a href="create.php">
            <button  id="create" >Создать тест</button>
        </a>
        <a href="answer.php">
            <button id="testgo">Пройти тест</button>
        </a>
    </div> 
	
	<?php
} else {    // если не авторизован, отображаем описание сайта
    ?> 
    <div id = "content"></div>
    
    <?php
}
//-----------------------------------------------------------------------------
?>

<?php
    // подключаем подвал сайта
   include "parts/footer.php";
?>