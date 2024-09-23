<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['user'];
    $email = $_POST['email'];
    $contraseña = $_POST['password'];
    $confirmar_contraseña = $_POST['confirm_password'];

    $servername = "localhost"; // Usualmente "localhost"
    $username = "root"; // Tu usuario de base de datos (ej. root)
    $password = ""; // Tu contraseña de base de datos
    $dbname = "clinica_luz_divina"; // Nombre de tu base de datos

    try {
        // Crear la conexión
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar la consulta
        $stmt = $conn->prepare("INSERT INTO usuario (Nombre, Correo, Contraseña) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $email, $contraseña]);

        echo "Datos guardados exitosamente";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null; // Cerrar la conexión
}
?>
