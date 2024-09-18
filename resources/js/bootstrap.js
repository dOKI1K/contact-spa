import axios from 'axios';
import 'boxicons'

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let navToggle = document.querySelector('.nav-toggle')
let navLinks = document.querySelector('#nav-links')
let bars = document.querySelectorAll('.bar')
let bars2 = document.querySelectorAll('.bar2')

function toggleHamburger(e) {
    bars.forEach(bar => bar.classList.toggle('x'))
    bars2.forEach(bar => bar.classList.toggle('x'))
    document.querySelector('#nav-links').classList.toggle('hidden')
    document.querySelector('#nav-links').classList.toggle('flex')
}
navToggle.addEventListener('click', toggleHamburger)
navLinks.addEventListener('click', toggleHamburger)
