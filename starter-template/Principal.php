<?php include('header2.php'); ?>


<?php
session_start();
$No_cuenta= $_SESSION['No_cuenta'];


if(!isset($No_cuenta)){

        header("location: ./index.php");
}else{
    
    echo "<h3> Hola, $No_cuenta </h3> ";


    

    // se usa el requiere para si psi se necesita el archivo conexion
require "./logica/conexion.php";
mysqli_set_charset($conexion,'utf8');

//genear el query
$consulta_sql="SELECT * FROM Jugador";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 



echo "<table border='2' >
    <tr>
        <th>Numero de cuenta</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Posicion de juego</th>
        <th>Carrera</th>
        <th>Equipo</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Contraseña</th>
    </tr>";


if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['No_cuenta'] ."</td>";
     echo"<td>". $row['Nombre'] ."</td>";
     echo"<td>". $row['Apellido_paterno'] ."</td>";
     echo"<td>". $row['Apellido_materno'] ."</td>";
     echo"<td>". $row['Edad'] ."</td>";
     echo"<td>". $row['Sexo'] ."</td>";
     echo"<td>". $row['Posicion_de_juego'] ."</td>";
     echo"<td>". $row['Carrera'] ."</td>";
     echo"<td>". $row['Equipo'] ."</td>";
     echo"<td>". $row['Telefono'] ."</td>";
     echo"<td>". $row['Correo_electronico'] ."</td>";
     echo"<td>". $row['Contraseña'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";
    echo "<br><br><br><br>";

}else{
    
    
    
    echo " <h1 style='color:red' >Sin Ningun registro</h1>";
 } 
  
    

    
    
    
    echo "
    <div class='container center-align' style='margin-top: 50px;'>
        <a href='Registro.php' class='btn-large waves-effect waves-light blue'>Nuevo registro <i class='material-icons right'>add</i></a>
        <a href='EliminarUsuario.php' class='btn-large waves-effect waves-light purple'>Eliminar usuario <i class='material-icons right'>delete</i></a>
        <a href='logica/salir.php' class='btn-large waves-effect waves-light red'>Cerrar sesión <i class='material-icons right'>logout</i></a>
        
    </div>
    <br>
    ";

    

}


?>

<?php include('footer.php'); ?>