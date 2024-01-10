// script.js
function updateTime() {
    const dateTimeElement = document.getElementById('date-time');
    const now = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
    const formattedDateTime = now.toLocaleDateString('es-ES', options);
    dateTimeElement.textContent = formattedDateTime;
}

// Actualizar la hora cada minuto
setInterval(updateTime, 60000);

// Mostrar la hora al cargar la página
updateTime();
