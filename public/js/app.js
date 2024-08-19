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

async function fetchTime() {
    try {
        const response = await fetch('/timer');
        if (!response.ok) {
            throw new Error('Resposta da rede não foi ok');
        }
        const data = await response.json();
        return data.timeLeft;
    } catch (error) {
        return 0; // Padrão para 0 em caso de erro
    }
}

function iniciarTemporizador(duracao, elemento) {
    let temporizador = duracao, dias, horas, minutos, segundos;
    const idIntervalo = setInterval(() => {
        dias = parseInt(temporizador / (60 * 60 * 24), 10);
        horas = parseInt((temporizador % (60 * 60 * 24)) / (60 * 60), 10);
        minutos = parseInt((temporizador % (60 * 60)) / 60, 10);
        segundos = parseInt(temporizador % 60, 10);

        horas = horas < 10 ? "0" + horas : horas;
        minutos = minutos < 10 ? "0" + minutos : minutos;
        segundos = segundos < 10 ? "0" + segundos : segundos;

        elemento.textContent = `${dias} Dias ${horas}:${minutos}:${segundos}`;

        if (--temporizador < 0) {
            clearInterval(idIntervalo);
            temporizador = 0;
        }
    }, 1000);
}

fetchTime().then(tempoRestante => {
    console.log('Iniciando temporizador com:', tempoRestante);
    document.querySelectorAll('#timer').forEach(timerElement => {
        iniciarTemporizador(tempoRestante, timerElement);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    new Glider(document.querySelector('.glider'), {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      dots: '.dots',
      arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
      }
    });
  });
