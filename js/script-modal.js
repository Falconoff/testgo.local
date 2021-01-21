// Открыть модальное окно помощь
var btnOpenContact = document.querySelector("#open_help");
btnOpenContact.onclick = function () {
	var contactsModal = document.querySelector("#help-modal");
	contactsModal.style.display = "block";
}
// Закрыть модальное окно помощь
var contactsModalCloseBtn =document.querySelector("#help-modal .close");
contactsModalCloseBtn.onclick =function () {
	var contactsModal = document.querySelector("#help-modal");
	contactsModal.style.display = "none";
}
// Открыть модальное окно входа
var btnOpenVhod = document.querySelector("#open_vhod");
btnOpenVhod.onclick = function (){
	var avtorizaziya = document.querySelector("#avtorizaziya");
	avtorizaziya.style.display = "block";
}
// Закрыть модальное окно входа
var avtorizaziyaCloseBtn = document.querySelector("#avtorizaziya .close");
avtorizaziyaCloseBtn.onclick = function(){
	var avtorizaziya = document.querySelector("#avtorizaziya");
	avtorizaziya.style.display = "none";
}
// Открыть модальное окно регистрации
var btnOpenRegist = document.querySelector("#open_regist");
btnOpenRegist.onclick = function (){
	var register = document.querySelector("#register");
	register.style.display = "block";
}
// Закрыть модальное окно регистрации
var registerCloseBtn = document.querySelector("#register .close");
registerCloseBtn.onclick = function(){
	var register = document.querySelector("#register");
	register.style.display = "none";
}