<?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $whatsapp = $_POST["whatsapp"];
    $sugerencia = $_POST["sugerencia"];

    echo "<h2>Sugerencia recibida</h2>";
    echo "Nombre: " . $nombre."<br>";
    echo "Correo: " . $correo."<br>";
    echo "Whatsapp: " . $whatsapp."<br>";
    echo "Sugerencia: " . $sugerencia."<br>";
?>