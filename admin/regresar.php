<?php
    include 'estilos-css.php';
    include '../con.php';
    $id = $_GET['id_equipo'];

    $q = "UPDATE equipos_registrados set estado = 0 where id = $id";
    //echo $q;
    $res = $conexion->query($q);
    if($res)
    {
?>
        <div class="container">
            <div class="alert alert-success" role="alert">
               El equipo fue regresado.
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
        <script> function redireccionarPagina() {window.location = 'index.php?o=4';} setTimeout('redireccionarPagina()', 3000);</script>
<?php
    }




    include 'librerias-js.php';
?>