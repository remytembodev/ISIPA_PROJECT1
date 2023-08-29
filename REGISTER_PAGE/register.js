let next1 = document.querySelector('.first-next');
let next2 = document.querySelector('.second-next');
let next3 = document.querySelector('.third-next');
let prev1 = document.querySelector('.first-prev');
let prev2 = document.querySelector('.second-prev');
let prev3 = document.querySelector('.third-prev');
let container = document.querySelector('.container');

next1.onclick = function(){
    container.classList.add('second-part');
    container.classList.remove('first-part');
}












// let login = document.querySelector('.login');
// let create = document.querySelector('.create');
// let container = document.querySelector('.container');

// login.onclick = function(){
//     container.classList.add('signinForm');
// }
// create.onclick = function(){
//     container.classList.remove('signin');
// }