document.addEventListener("DOMContentLoaded", function() {
    // Obtener todas las pestañas de submenú
    var parentTabs = document.querySelectorAll('.sub-menu > a');
  
    // Iterar sobre cada pestaña de menú padre
    parentTabs.forEach(function(parentTab) {
        // Agregar un eventListener para abrir/cerrar el submenú al hacer clic en la pestaña padre
        parentTab.addEventListener('click', function(event) {
            // Obtener el submenú correspondiente a esta pestaña padre
            var subMenu = parentTab.parentNode.querySelector('.sub');
        
            // Verificar si el submenú está visible
            var isSubMenuVisible = window.getComputedStyle(subMenu).display === 'block';
        
            // Ocultar todos los submenús
            parentTabs.forEach(function(tab) {
                var sub = tab.parentNode.querySelector('.sub');
                if (sub && tab !== parentTab) {
                    sub.style.display = 'none';
                    tab.classList.remove('active'); // Eliminar la clase 'active' de todas las pestañas
                }
            });
        
            // Si el submenú no está visible, mostrarlo; de lo contrario, ocultarlo
            subMenu.style.display = isSubMenuVisible ? 'none' : 'block';
            parentTab.classList.toggle('active'); // Alternar la clase 'active' en la pestaña actual
        });
    });
});

function toggleMenu() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("active");
}

