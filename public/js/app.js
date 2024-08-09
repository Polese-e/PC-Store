let lastScrollY = 0;
const input = document.getElementById("searchInput");
const searchIcon = document.getElementById("searchIcon");
const arrowIcon = document.getElementById("arrowIcon");

window.addEventListener("scroll", () => {
    const currentScrollY = window.scrollY;
    if (currentScrollY > lastScrollY) {
        input.style.backgroundColor = "#444444";
        input.style.color = "white";
        searchIcon.style.color = "white";
        arrowIcon.style.color = "white";
        changePlaceholderColor("white");
    } else {
        input.style.backgroundColor = "white";
        input.style.color = "black";
        searchIcon.style.color = "black";
        arrowIcon.style.color = "black";
        changePlaceholderColor("#7474a1");
    }
    lastScrollY = currentScrollY;
});

function changePlaceholderColor(color) {
    const style = document.createElement('style');
    style.innerHTML = `#searchInput::placeholder { color: ${color}; }`;
    document.head.appendChild(style);
}

