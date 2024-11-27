<?php include('header2.php'); ?>

<?php
session_start();
$No_cuenta= $_SESSION['No_cuenta'];


if(!isset($No_cuenta)){

        header("location: ./index.php");
}else{
    
    echo "<h1> Hola, $No_cuenta </h1> ";
  


echo "
<div class='row'>
  <div class='col s12 m6 offset-m3'>
    <h4 class='center-align'>Eliminar Usuario</h4>
    <form method='POST' action='logica/deleteUsuario.php'>
      
      <!-- Campo para el nombre de usuario -->
      <div class='input-field'>
        <input id='No_cuenta' type='text' name='No_cuenta' required>
        <label for='No_cuenta'>Numero de cuenta</label>
      </div>

      <!-- Campo para la Contraseña -->
      <div class='input-field'>
        <input id='Contraseña' type='text' name='Contraseña' required>
        <label for='Contraseña'>Contraseña</label>
      </div>

      <!-- Botón para eliminar usuario -->
      <div class='row center-align'>
        <button type='submit' class='btn waves-effect waves-light red'>Eliminar <i class='material-icons right'>delete</i></button>
      </div>
      
    </form>
    <div>
    <a href='Principal.php' class='btn-large waves-effect waves-light purple'>Regresar <i class='material-icons right'>keyboard_return</i></a>
   </div> 
   </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
</div>";
}
?>
<?php include('footer.php'); ?>

