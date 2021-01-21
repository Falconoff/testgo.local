// ФУНКЦИЯ СОЗДАНИЯ РАНДОМНОГО НОМЕРА ДЛЯ НАЗВАНИЯ ТАЛИЦЫ

function getRnd(){

	var testRnd = document.querySelector("#test_rendom");
	    r = Math.floor(Math.random() * (256)),
	    g = Math.floor(Math.random() * (256)),
	    b = Math.floor(Math.random() * (256)),
	    getRandomNumber = 'r' + r.toString(16) + g.toString(16) +  b.toString(16);
	
	testRnd.value = getRandomNumber;
};

getRnd();


// таймер обратного отсчёта для кнопки после завершения теста

// кнопка в файле final.php
let button = document.querySelector(".to-main");
// кол-во секунд`
let i = 10;

let countdowm = setInterval( function() {

	button.innerText = "На главную " + i;
	// console.log(i);
	i--;
	if (i < 0) {
		clearInterval(countdowm);
		button.click();
	};
}, 1000);



