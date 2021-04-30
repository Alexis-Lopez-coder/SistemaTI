<?php
include 'estilos-css.php';
include '../con.php';
    $id = $_GET['id_admin'];
    $query = "DELETE FROM admins where id_admin = '$id'";
    $res = $conexion->query($query);
    if($res){
?>
        <div class="container">
            <div class="alert alert-warning" role="alert">
               Fue eliminado el usuario <?php echo $id; ?>.
            </div>
        </div>
        <script> function redireccionarPagina() {window.location = 'index.php?o=3';} setTimeout('redireccionarPagina()', 3000);</script>
<?php        
    }
    else{

?>
         <div class="container">
            <div class="alert alert-warning" role="alert">
                No se pudo eliminar el usuario <?php echo $id; ?>.
            </div>
        </div>
        <script> function redireccionarPagina() {window.location = 'index.php?o=3';} setTimeout('redireccionarPagina()', 3000);</script>      
<?php
    }


    include 'librerias-js.php';

?>