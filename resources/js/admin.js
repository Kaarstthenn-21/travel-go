// resources/js/admin.js

function showWelcome() {
    const panelPrincipal = document.getElementById('panel-principal');
    panelPrincipal.innerHTML = `
        <h2 class="text-2xl font-bold mb-4">¡Bienvenido!</h2>
        <p class="text-gray-700">Bienvenido a Travel Go, tu plataforma de gestión de viajes. Aquí podrás encontrar herramientas para administrar hoteles, paquetes turísticos y mucho más.</p>
    `;
}

function showHotels() {
    window.location.href = '/admin/hotels';
}

document.addEventListener('DOMContentLoaded', function() {
    showWelcome(); // Mostrar la bienvenida por defecto al cargar la página
});
