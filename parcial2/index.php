<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria Patitas</title>
</head>
<body>
    <header>
        <h1>Veterinaria Patitas</h1>
        <p>Cuidamos a tu querida mascota con el amor y cariño que se merece</p>
    </header>
    <main>
        <section>
            <h2>Reserva</h2>
            <form id="form-turno" novalidate method="POST" action="procesar.php">
                
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="correo">Correo electronico</label>
                <input type="email" id="correo" name="correo" required>

                <label for="mascota">Contanos de tu mascota</label>
                <textarea id="mascota" name="mascota" rows="3" name="mascota"></textarea>

                <button type="submit">Reservar mi turno</button>

                <p id="aviso-turno" class="aviso"></p>
            </form>
        </section>
    </main>

    <footer>
        <p>Parcial 2 - Christian Zarate Fernandez - 20 de octubre de 2026</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>