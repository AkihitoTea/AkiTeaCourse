const loginForm = document.querySelector('.loginForm');
const registerForm = document.querySelector('.registerForm');
function toLog(){
    registerForm.style.display = "none"
    loginForm.style.display = "flex";
}
function toReg(){
    loginForm.style.display = 'none';
    registerForm.style.display = 'flex';
}