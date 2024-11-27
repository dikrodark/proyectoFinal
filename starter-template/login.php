<?php include('header1.php'); ?>


<div class="row">
  <div class="col s12 m5 offset-m3">
    <div>
      <h1 class="center-align">Inicia sesión</h1>
      <form method="POST" action="logica/loguear.php">
        
        <!-- Campo para el número de cuenta -->
        <div class="input-field">
          <input id="No_cuenta" type="text" name="No_cuenta" placeholder="Cuenta" class="validate" required>
          <label for="No_cuenta">Cuenta</label>
        </div>

        <!-- Campo para la contraseña -->
        <div class="input-field">
          <input id="Contraseña" type="text" name="Contraseña" placeholder="Contraseña" class="validate" required>
          <label for="Contraseña">Contraseña</label>
        </div>

        <!-- Botón de inicio de sesión -->
        <div class="row center-align">
          <button type="submit" name="submit" class="btn waves-effect waves-light green">Iniciar Sesión</button>
        </div>
      </form>
    </div>
  </div>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php include('footer.php'); ?>
