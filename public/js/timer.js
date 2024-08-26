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
    let temporizador = duracao,
        dias, horas, minutos, segundos;
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
    document.querySelectorAll('#timer').forEach(timerElement => {
        iniciarTemporizador(tempoRestante, timerElement);
    })
});
