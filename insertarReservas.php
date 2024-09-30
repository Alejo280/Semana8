<?php
include 'conexion.php';

$sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel)
        VALUES (1, '2024-09-01', 1, 1),
               (2, '2024-09-02', 2, 2),
               (3, '2024-09-03', 1, 2),
               (4, '2024-09-04', 3, 1),
               (5, '2024-09-05', 2, 3),
               (6, '2024-09-06', 4, 3),
               (7, '2024-09-07', 1, 2),
               (8, '2024-09-08', 5, 1),
               (9, '2024-09-09', 6, 2),
               (10, '2024-09-10', 3, 1)";

if ($conn->query($sql) === TRUE) {
    echo "Reservas agregadas exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>