// ФУНКЦИЯ СОЗДАНИЯ РАНДОМНОГО НОМЕРА ДЛЯ НАЗВАНИЯ ТАБЛИЦЫ

function getRnd(){

	var testRnd = document.querySelector("#test_rendom");
	    r = Math.floor(Math.random() * (256)),
	    g = Math.floor(Math.random() * (256)),
	    b = Math.floor(Math.random() * (256)),
	    getRandomNumber = 'r' + r.toString(16) + g.toString(16) +  b.toString(16);
	
	testRnd.value = getRandomNumber;
};

getRnd();