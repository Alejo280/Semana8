<?php
include 'conexion.php';

$sql = "SELECT H.nombre, COUNT(R.id_reserva) AS total_reservas
        FROM HOTEL H
        JOIN RESERVA R ON H.id_hotel = R.id_hotel
        GROUP BY H.nombre
        HAVING total_reservas > 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Hotel: " . $row['nombre'] . " - Reservas: " . $row['total_reservas'] . "<br>";
    }
} else {
    echo "No se encontraron hoteles con más de dos reservas";
}

$conn->close();
?>