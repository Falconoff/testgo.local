
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
