/* Glider Home */
new Glider(document.querySelector('.glider'), {
    slidesToShow: 9,
    slidesToScroll: 6,
    draggable: true,
    dots: '.dots'
});

/* Label Category Highlights */
const cards = document.querySelectorAll('#container-product-subcategory .cards .card h2');

cards.forEach(card => {
    let fontSize = parseInt(window.getComputedStyle(card).fontSize);
    while (card.scrollWidth > card.offsetWidth && fontSize > 12) {
        fontSize--;
        card.style.fontSize = fontSize + 'px';
    }
});
