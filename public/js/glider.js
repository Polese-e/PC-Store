document.addEventListener('DOMContentLoaded', () => {
    if (typeof Glider !== 'undefined') {
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 9,
            slidesToScroll: 6,
            draggable: true,
            dots: '.dots'
        });
    } else {
        console.error('Glider is not defined');
    }
});
