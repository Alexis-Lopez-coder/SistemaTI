<?php
    include 'estilos-css.php';
    include '../con.php';
    $id = $_GET['id_equipo'];
    $fecha_hoy = date('Y-m-d H:i:s');
    $fecha_hoy = strval($fecha_hoy);

    $q = "UPDATE equipos_registrados set estado = 1, leido = 1, fecha_entrega = '$fecha_hoy' where id = $id";
    $res = $conexion->query($q);
    if($res)
    {
?>
        <div class="container">
            <div class="alert alert-success" role="alert">
               El equipo fue liberado.
            </div>
        </div>
        <script> function redireccionarPagina() {window.location = 'index.php?o=1';} setTimeout('redireccionarPagina()', 3000);</script>
<?php
    }
    else
    {
?>
        <div class="container">
            <div class="alert alert-danger" role="alert">
               Algo salio mal. Intenta de nuevo.
            </div>
        </div>
        <script> function redireccionarPagina() {window.location = 'index.php?o=1';} setTimeout('redireccionarPagina()', 3000);</script>
<?php
    }




    include 'librerias-js.php';
?>