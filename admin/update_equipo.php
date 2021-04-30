<?php
    include 'estilos-css.php';
    include '../con.php';
    include 'variables.php';
    $id = $_POST['id'];
    if (($garantia == "") || ($garantia == null) || ($garantia == "1969-12-31")){
        $garantia = "NA";
    }
    $q = "UPDATE equipos_registrados set nombre = '$nombre', apellidos = '$apellidos', area = '$area', marca_eq = '$marcaPC', modelo_eq = '$modeloPC', marca_cpu = '$marca_cpu', modelo_cpu = '$modelo_cpu', marca_ram = '$marca_ram', modelo_ram = '$modelo_ram', marca_dd = '$marca_dd', modelo_dd = '$modelo_dd', garantia = '$garantia', user_pass = '$user_pass', software = '$software', descripcion = '$descripcion' where id = $id ";
    //echo $q;
    $res = $conexion->query($q);

    if($res)
    {
?>
        <div class="container">
            <div class="alert alert-success" role="alert">
               Los datos fueron actualizados.
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
               Hubo un error al actualizar los datos<?php echo "". $conexion->error; ?>
            </div>
        </div>
        <script> function redireccionarPagina() {window.location = 'index.php?o=1';} setTimeout('redireccionarPagina()', 4000);</script>
<?php        
    }
    include 'librerias-js.php';
?>