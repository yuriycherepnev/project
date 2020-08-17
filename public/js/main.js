let myPage = document.getElementById('my_page');
let backgroundAuth = document.getElementById('background_auth');
let log_in = document.getElementById('log_in');
let sign_in = document.getElementById('sign_in');
let exit = document.getElementById('exit');
let swap = document.getElementById('swap');


if (sessionStorage.getItem("is_reloaded")) {
  checkForm();	
}

sessionStorage.setItem("is_reloaded", true);//проверяем форму при обновлении страницы
myPage.addEventListener('click', pageForm);//обработчик кнопки my_page
log_in.addEventListener('click', logIn);
sign_in.addEventListener('click', signIn);

function checkForm() {
	if (localStorage.page_form == 1) {
		backgroundAuth.classList.remove("display_none");
		log_in.classList.remove("display_none");
	} 
}

function pageForm() {
  backgroundAuth.classList.remove("display_none");
  log_in.classList.remove("display_none");
  localStorage.page_form = 1;
}

function logIn() {
  if (event.target.id == 'exit') {
  	this.classList.add("display_none");
  	backgroundAuth.classList.add("display_none");
    localStorage.page_form = 0;
  }
  if (event.target.id == 'swap') {
  	this.classList.add("display_none");
  	sign_in.classList.remove("display_none");
  }
}

function signIn() {
  if (event.target.id == 'exit') {
  	this.classList.add("display_none");
  	backgroundAuth.classList.add("display_none");
    localStorage.page_form = 0;
  }
  if (event.target.id == 'swap') {
  	this.classList.add("display_none");
  	log_in.classList.remove("display_none");
  }
}





