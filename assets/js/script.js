const btn_menu = document.querySelector('.btn_menu');
const btn_close_menu = document.querySelector('.btn_close_menu');
const menu_second = document.querySelector('.menu_second');
const over_body = document.querySelector('.over_body')

btn_menu.addEventListener('click', () => {

    menu_second.classList.add('open_menu');
    over_body.classList.add('open_over_body');

});

btn_close_menu.addEventListener('click', () => {

    menu_second.classList.remove('open_menu');
    over_body.classList.remove('open_over_body');

});

over_body.addEventListener('click', () => {

    menu_second.classList.remove('open_menu');
    over_body.classList.remove('open_over_body');

});