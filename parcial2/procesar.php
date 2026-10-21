<?php
    echo "<h1>Turno reservado en Veterinaria Patitas</h1>";

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mascota = $_POST["mascota"];

    echo "<p>Nombre: ".$nombre."</p>";
    echo "<p>Correo: ".$correo."</p>";
    echo "<p>Mascota: ".$mascota."</p>";

    echo "<h2> La lista de servicios de la veterinaria </h2>";
    
    $servicios = ["Consulta general - Bs 60","Vacuna antirrabica - Bs 40","Bano y corte - Bs 50"];

    foreach ($servicios as $servicio) {
        echo "<p>".$servicio."</p>";
    }

    echo "<p> Te atiende Cristian Zarate Fernandez </p>";
?>