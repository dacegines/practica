<?php
// Verifica si los datos fueron enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $nombre = htmlspecialchars($_POST["nombre"]);
    $edad = intval($_POST["edad"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefono = htmlspecialchars($_POST["telefono"]);

    $genero = htmlspecialchars($_POST["genero"]);

if (!empty($nombre) && $edad > 0 && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($genero)) {
    echo "<h1>Gracias por enviar tus datos</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Edad:</strong> $edad años</p>";
    echo "<p><strong>Correo Electrónico:</strong> $email</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Género:</strong> $genero</p>";
} else {
    echo "<h1>Error: Datos inválidos</h1>";
    echo "<p>Por favor revisa los datos ingresados e intenta de nuevo.</p>";
}

}
?>
