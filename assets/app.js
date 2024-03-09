import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

// burger menu
let menu_btn = document.getElementById('menu-button');

menu_btn.addEventListener('click', () => {
    menu_btn.classList.toggle('active');
    document.getElementById('line-1').classList.toggle('active');
    document.getElementById('line-2').classList.toggle('active');
    document.getElementById('line-3').classList.toggle('active');
});

// scroll down btn

let scroll_down_btn = document.getElementById("scroll_down_btn");
scroll_down_btn.addEventListener('click', () => {
    let target = document.getElementById('me');
    console.log(target)
    window.scrollTo({
        top: target.offsetTop,
        behavior: 'smooth'
    })
})

//display more of skills

document.addEventListener('click', (e) => {
    if (e.target.className == 'skill_arrow') {
        let text = e.target.parentNode.nextElementSibling;
        text.classList.toggle('active')
    }
})
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('achievements__card__btn')) {
        let text = e.target.nextElementSibling;
        text.classList.toggle('active')
    }
})

// let scroll_up_btn = document.getElementById("scroll_up_btn");
// function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//         scroll_up_btn.style.display = "block";
//     } else {
//         scroll_up_btn.style.display = "none";
//     }
// }
// // When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function () { scrollFunction() };

// scroll_up_btn.addEventListener('click', () => {
//     window.scrollTo({ top: 0, behavior: 'smooth' });
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
// });
