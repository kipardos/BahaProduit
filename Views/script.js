
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

const logregBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');


if (bar){ 
    bar.addEventListener('click', () => {
        nav.classList.add('active')
     })
}
if(close){
    close.addEventListener('click', () =>{
        nav.classList.remove('active');
    })
}

registerLink.addEventListener('click',()=> {
    logregBox.classList.add('active');

});

loginLink.addEventListener('click', () => {
    logregBox.classList.remove('active');
});

