<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Capturar el nombre del usuario enviado por POST
$cuentaUser = $_POST['No_cuenta'];

// Buscar si el usuario ya existe
$buscarcuenta = "SELECT * FROM Jugador WHERE No_cuenta = '$cuentaUser'";
$resultado = $conexion->query($buscarcuenta);

// Contar los resultados
$count = mysqli_num_rows($resultado);

// Inicializar mensaje y tipo
$mensaje = "";
$tipo = ""; // Puede ser "success", "error", "warning"

if ($count == 1) {
    // Usuario ya registrado
    $mensaje = "El usuario ya está registrado.";
    $tipo = "warning";
} else {
    // Consulta SQL para insertar el nuevo registro
    $sql = "INSERT INTO Jugador (No_cuenta, Nombre, Apellido_paterno, 
    Apellido_materno, Edad, Sexo, Posicion_de_juego, Carrera, Equipo, 
    Telefono, Correo_electronico, Contraseña)  VALUES (
        '$_POST[No_cuenta]', 
        '$_POST[Nombre]', 
        '$_POST[Apellido_paterno]', 
        '$_POST[Apellido_materno]', 
        '$_POST[Edad]', 
        '$_POST[Sexo]', 
        '$_POST[Posicion_de_juego]', 
        '$_POST[Carrera]', 
        '$_POST[Equipo]',
        '$_POST[Telefono]',
        '$_POST[Correo_electronico]',
        '$_POST[Contraseña]'
    )";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $sql)) {
        $mensaje = "Usuario agregado con éxito.";
        $tipo = "success";
    } else {
        $mensaje = "Error al insertar el usuario: " . mysqli_error($conexion);
        $tipo = "error";
    }
}

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir a ResultadoRegistro.php con mensaje y tipo
header("Location: ../ResultadoRegistro.php?mensaje=" . urlencode($mensaje) . "&tipo=" . urlencode($tipo));
exit();
?>
