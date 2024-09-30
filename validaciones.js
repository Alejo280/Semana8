document.addEventListener("DOMContentLoaded", () => {
    const formVuelo = document.getElementById('formVuelo');
    const formHotel = document.getElementById('formHotel');

    // Validación para formulario de vuelos
    formVuelo.addEventListener('submit', function(event) {
        const precio = document.getElementById('precio').value;
        if (precio <= 0) {
            alert('El precio del vuelo debe ser mayor que cero.');
            event.preventDefault();
        }
    });

    // Validación para formulario de hoteles
    formHotel.addEventListener('submit', function(event) {
        const tarifa = document.getElementById('tarifa_noche').value;
        if (tarifa <= 0) {
            alert('La tarifa por noche debe ser mayor que cero.');
            event.preventDefault();
        }
    });
});