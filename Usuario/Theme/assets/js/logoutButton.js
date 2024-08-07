document.addEventListener('DOMContentLoaded', function() {
    var logoutBtn = document.getElementById('logout-btn');
    if (logoutBtn) {
        // Agregar una clase para cambiar el color de fondo al pasar el cursor
        logoutBtn.addEventListener('mouseover', function() {
            this.classList.add('hover-effect');
        });

        // Quitar la clase cuando el cursor sale del botón
        logoutBtn.addEventListener('mouseout', function() {
            this.classList.remove('hover-effect');
        });
    }
});