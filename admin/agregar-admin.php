<?php
    include '../con.php';
    include 'estilos-css.php';
    $id = $_POST['id_admin'];
    $pass = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $profesion = $_POST['profesion'];
    $esAdmin = $_POST['esAdmin'];

    if(!isset($esAdmin)){
        $esAdmin = 0;
    }

    $q = "INSERT INTO admins values('$id','$pass','$nombre','$apellidos','$email','$numero','$profesion','', $esAdmin)";

    $r = $conexion->query($q);
    if($r){
?>
        <div class="container">
            <div class="alert alert-primary" role="alert">
                Datos agregados correctamente
            </div>
        </div>
        <script> function redireccionarPagina() {window.location = 'index.php?o=3';} setTimeout('redireccionarPagina()', 3000);</script>
        
<?php        
    }
    else{
?>
        <div class="container">
            <div class="alert alert-danger" role="alert">
                Algo fallo <?php echo "". $conexion->error; ?>.
            </div>
        </div>
        <!<script> function redireccionarPagina() {window.location = 'index.php?o=3';} setTimeout('redireccionarPagina()', 3000);</script>
        
<?php
    }
    include 'librerias-js.php';
?>