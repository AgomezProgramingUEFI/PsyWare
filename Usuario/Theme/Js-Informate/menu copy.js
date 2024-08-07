document.addEventListener("DOMContentLoaded", function() {
    var parentMenuItems = document.querySelectorAll('.sub-menu > a');
    var hamburgerBtn = document.getElementById('hamburger-btn');
    var sidebar = document.getElementById('sidebar');

    // Agregar evento clic al botón de hamburguesa
    hamburgerBtn.addEventListener('click', function() {
        // Alternar la clase 'active' en el menú lateral
        sidebar.classList.toggle('active');
    });

    // Evento clic para los elementos del menú
    parentMenuItems.forEach(function(parentMenuItem) {
        parentMenuItem.addEventListener('click', function(event) {
            event.preventDefault(); 

            var subMenu = parentMenuItem.nextElementSibling;
            var isSubMenuVisible = subMenu.classList.contains('active');

            parentMenuItems.forEach(function(item) {
                var sub = item.nextElementSibling;
                if (sub && item !== parentMenuItem) {
                    sub.classList.remove('active');
                    item.classList.remove('active');
                }
            });

            if (isSubMenuVisible) {
                subMenu.classList.remove('active');
            } else {
                subMenu.classList.add('active');
                parentMenuItem.classList.add('active');
            }
        });
    });
});