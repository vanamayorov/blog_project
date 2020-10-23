'use strict'
const input = document.querySelector('#inp-add');
const btnAdd = document.querySelector('#btn-add');
const ul = document.querySelector('.list-group');
const btnClear = document.querySelector('#btn-clear');
let todos;

const toLocal = () => {
    todos = ul.innerHTML;
    localStorage.setItem('todos', todos);
}

//add event
btnAdd.addEventListener('click', event =>{
    event.preventDefault();
    if(input.value === ""){
        return false
    }
    createDeleteElements(input.value);
    
    input.value = "";
});

function createDeleteElements(value){
    const li = document.createElement('li');
    const btnDelete = document.createElement('button')

    li.className = 'list-group-item d-flex justify-content-between align-items-center p-2';
    li.textContent = value;

    btnDelete.className = 'btn btn-danger btn-sm';
    btnDelete.textContent = 'X';
//remove task
    btnDelete.addEventListener('click', event => {
        event.preventDefault();
        ul.removeChild(li);
        
    });
    li.appendChild(btnDelete);
    ul.appendChild(li);
    //toLocal();
}

//remove all tasks
btnClear.addEventListener('click', event => {
    event.preventDefault();
    ul.innerHTML = '';
    //toLocal();
});

//show tasks from localstorage
// if(localStorage.getItem('todos')){
//     ul.innerHTML = localStorage.getItem('todos');
// }





