import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

// burger menu
let menu_btn = document.getElementById('menu-button');

menu_btn.addEventListener('click', () => {
    menu_btn.classList.toggle('active');
    document.getElementById('line-1').classList.toggle('active');
    document.getElementById('line-2').classList.toggle('active');
    document.getElementById('line-3').classList.toggle('active');
});

let scroll_up_btn = document.getElementById("scroll_up_btn");
let scroll_down_btn = document.getElementById("scroll_down_btn");


function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scroll_up_btn.style.display = "block";
    } else {
        scroll_up_btn.style.display = "none";
    }
}
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

scroll_up_btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

scroll_down_btn.addEventListener('click', () => {
    window.scrollTo({ bottom: })
})