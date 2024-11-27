<?php include('header2.php'); ?>

<?php
session_start();
$No_cuenta = $_SESSION['No_cuenta']; // Obtén el nombre de usuario desde la sesión

// Verifica si la sesión del usuario no está iniciada
if (!isset($No_cuenta)) {
    header("Location: ./index.php"); // Redirige al login si no está logueado
    exit(); // Asegúrate de que el script se detenga aquí
} else {
    // Si está logueado, muestra el contenido de la página
    echo "<h6 class='center-align tiny'> $No_cuenta desea registrar a ...</h6>";
}
?>

<body>
    <h1 class="center-align">Registro</h1>
    <div class="container">
        <form method="POST" action="logica/enviarRegistro.php">
            <!-- Numero de cuenta -->
            <div class="input-field">
                <label for="No_cuenta">Numero de cuenta</label>
                <input type="number" id="No_cuenta" name="No_cuenta" required maxlength="100" placeholder="Ingresa tu numero de cuenta">
            </div>

            <!-- Nombre -->
            <div class="input-field">
                <label for="Nombre">Nombre</label>
                <input type="text" id="Nombre" name="Nombre" required maxlength="100" placeholder="Ingresa tu nombre">
            </div>

            <!-- Apellido paterno -->
            <div class="input-field">
                <label for="Apellido_paterno">Apellido paterno</label>
                <input type="text" id="Apellido_paterno" name="Apellido_paterno" required placeholder="Ingresa tu apellido paterno">
            </div>

            <!-- Apellido materno -->
            <div class="input-field">
                <label for="Apellido_materno">Apellido_materno</label>
                <input type="text" id="Apellido_materno" name="Apellido_materno" required placeholder="Ingresa tu apellido materno">
            </div>

            <!-- Edad -->
            <div class="input-field">
                <label for="Edad">Edad</label>
                <input type="number" id="Edad" name="Edad" step="0.01" required placeholder="Ingresa tu edad">
            </div>


            <!-- Sexo -->
            <div class="input-field">
                <select id="Sexo" name="Sexo" required>
                    <option value="" disabled selected>Selecciona tu sexo</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Prefiero no contestar">Prefiero no contestar</option>
                </select>
                <label for="Sexo">Sexo</label>
            </div>

            <!-- Posicion de juego -->
            <div class="input-field">
                <select id="Posicion_de_juego" name="Posicion_de_juego" required>
                    <option value="" disabled selected>Selecciona tu posicion de juego</option>
                    <option value="Portero">Portero</option>
                    <option value="Defensa">Defensa</option>
                    <option value="Medio">Medio</option>
                    <option value="Delantero">Delantero</option>
                </select>
                <label for="Posicion_de_juego">Posicion_de_juego</label>
            </div>

            <!-- Carrera -->
            <div class="input-field">
                <label for="Carrera">Carrera</label>
                <input type="text" id="Carrera" name="Carrera" required maxlength="100" placeholder="Ingresa tu carrera">
            </div>

            <!-- Equipo -->
            <div class="input-field">
                <label for="Equipo">Equipo</label>
                <input type="text" id="Equipo" name="Equipo" required maxlength="100" placeholder="Ingresa tu equipo">
            </div>

            <!-- Telefono -->
            <div class="input-field">
                <label for="Telefono">Telefono</label>
                <input type="number" id="Telefono" name="Telefono" required maxlength="100" placeholder="Ingresa tu telefono">
            </div>

            <!-- Correo_electronico -->
            <div class="input-field">
                <label for="Correo_electronico">Email</label>
                <input type="text" id="Correo_electronico" name="Correo_electronico" required maxlength="100" placeholder="Ingresa tu correo electronico">
            </div>

            <!-- Contraseña -->
            <div class="input-field">
                <label for="Contraseña"> Contraseña</label>
                <input type="text" id="Contraseña" name="Contraseña" required maxlength="100" placeholder="Ingresa tu contraseña">
            </div>

            <!-- Botón de envío -->
            <div class="center">
                <button class="btn waves-effect waves-light blue" type="submit" name="submit">
                    Enviar registro <i class="material-icons right">send</i>
                </button>
            </div>
        </form>

        
        <div class='container center-align' style='margin-top: 50px;'>
        <a href='Principal.php' class='btn-large waves-effect waves-light purple'>Regresar <i class='material-icons right'>keyboard_return</i></a>
    </div>
    </div>
</body>

<br><br><br>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializar selects
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });
</script>

<?php include('footer.php'); ?>
