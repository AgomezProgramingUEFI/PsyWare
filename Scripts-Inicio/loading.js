document.addEventListener("DOMContentLoaded", function() {
    // Establece el tiempo de espera en milisegundos (por ejemplo, 3000ms = 3 segundos)
    var tiempoDeEspera = 3000;

    setTimeout(function() {
        document.querySelector(".loader_bg").style.display = "none";
    }, tiempoDeEspera);
});
