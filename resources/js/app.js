import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';
import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    var splide2 = new Splide('#sponsor', {
        perPage: 5,
        breakpoints: {
            768: {
                perPage: 2,
            },
            1025: {
                perPage: 3,
            },
            1295: {
                perPage: 4,
            },
        },
        type: 'loop',
        arrows: false,
        pagination: false,
    });
    splide2.mount({ AutoScroll });
});
