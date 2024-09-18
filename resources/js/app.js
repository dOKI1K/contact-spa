import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    var splide2 = new Splide('#phrases', {
        perPage: 1,
        type: 'loop',
        autoplay: true,
        arrows: false,
        pagination: false,
    });
    splide2.mount();
});
