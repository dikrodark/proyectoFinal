<?php
require 'conexion.php';
session_start();

$_SESSION['No_cuenta'] = $No_cuenta;

$No_cuenta = $_POST['No_cuenta'];
$Contraseña = $_POST['Contraseña'];


//La función COUNT devuelve el número de filas de la consulta, es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT COUNT(*) as contar from Jugador where No_cuenta = '$No_cuenta' and contraseña = '$Contraseña'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {

    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['No_cuenta'] = $No_cuenta;

    header("location: ../Principal.php");
    //header("location: ../inicio.php");
    
} else {

    header("location: ../LoginError.php");
}
?>