<?php
  session_start();
  $opc = $_GET['o'];
  $usuario = $_SESSION['username'];


  if(isset($usuario)){
    include '../con.php';
    $q = "SELECT COUNT(leido) total FROM contacto where leido = 0";
    $eq = "SELECT  COUNT(leido) t from equipos_reparar where leido = 0";

    $x = $conexion->query($eq);
    $result = $conexion->query($q);

    
    $valor = mysqli_fetch_assoc($x);
    $fila = mysqli_fetch_assoc($result);

    $qNotif = "SELECT mensaje FROM contacto";
    
    $not = $conexion->query($qNotif);

    if($opc == 6 ){
      $valor = 0;
    }
    if($opc == 7){
      $fila = 0;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin .:. Dashboard</title>
  <?php include 'estilos-css.php'; ?>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
    
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <!--<a class="navbar-brand" href="#">Project name</a>-->
          <a href="#"><img style="margin-top: 8px;" src="img/icono.png" alt="logo"></a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
            
          <ul class="nav navbar-nav">
            <li><a href="admin.php?o=<?php echo "1" ?>"><i class="las la-laptop"></i> Equipos a reparar</a></li>
            <li><a href="admin.php?o=<?php echo "2" ?>"><i class="las la-database"></i> Inventario</a></li>
            <li><a href="admin.php?o=<?php echo "3" ?>"><i class="las la-plus-circle"></i> Inventarioss</a></li>
            <li><a href="admin.php?o=<?php echo "4" ?>"><i class="las la-file-alt"></i> Reportes</a></li>
            <?php
              if ($opc == 3){
            ?>
              <span><a style="margin-top: 8px; margin-left: 5px;" class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal"><i class="las la-plus-circle"></i> Agregar</a></span>
            <?php
              }
            ?>
            
            
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="las la-bell"></i>
                  Notificaciones <strong><?php echo $fila['total'] + $valor['t']; ?></strong><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
                  <li>
                    <a href="admin.php?o=<?php echo "7" ?>">
                      <i class="las la-id-card"></i>
                      Tienes <?php echo $fila['total']; ?> mensajes de clientes.
                    </a>
                  </li>
                  
                  <li role="separator" class="divider"></li>

                  <li>
                    <a href="admin.php?o=<?php echo "6" ?>">
                    <i class="las la-tools"></i>
                      Tienes <?php echo $valor['t']; ?> notificaciones de los equipos de computo.
                    </a>
                  </li>
                 
                </ul>

              </li>


          </ul>
          <li><input id="buscar" style="margin-top: 8px;" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar"></li>
          </ul>
          
          
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="las la-user-circle"></i> <?php echo $usuario; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin.php?o=<?php echo "5" ?>"><i class="las la-user-cog"></i> Mi Perfil</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="../logout.php"><i class="las la-sign-out-alt"></i> Cerrar Sesion</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse-->
      </div>
    </nav>

<section id="container" class="">
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="las la-laptop"></i> Sistema TI</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="#">Inicio</a></li>
          <li><i class="las la-laptop"></i></i>
            <?php
              if($opc == 1){
                echo "Equipos a reparar";
              }
              if($opc == 2){
                echo "Registrar equipo";
              }
              if($opc == 3){
                echo "Registrar equipo";
              }
              if($opc == 4){
                echo "Reportes";
              }
              if($opc == 5){
                echo "Perfil";
              }
              if($opc == 6){
                  echo "Notificaciones";
              }
              if($opc == 7){
                  echo "Notificaciones / Contacto";
              }
            ?>
          </li>
        </ol>
      </div>
    </div>



    <?php
      if($opc == 1){
        include 'act-admins/equipos-reparar.php';
      }
      if($opc == 2){
        include 'act-admins/add-equipo.php';
      }
      if($opc == 3){
        include 'act-admins/inventario.php';
      }
      if($opc == 4){
        include 'act-admins/reportes.php';
      }
      if($opc == 5){
        include 'perfil.php';
      }
      if ($opc == 6){
        include 'notificaciones.php';
      }
      if ($opc == 7){
        include 'notificaciones-clientes.php';
      }
    ?>

    <?php include 'librerias-js.php'; ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agrega un producto al inventario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="agregar-inventario.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Producto</label>
                <input required type="text" class="form-control" name="producto" aria-describedby="emailHelp" placeholder="Nombre del producto">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Descripcion</label>
                <textarea required name="descripcion" placeholder="Descripcion del producto"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Cantidad</label>
                <input name="cantidad" step="0.5" pattern="\x2b[0-9]"  required type="number" class="form-control" placeholder="Cantidad">
              </div>
              
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <script>
          $(document).ready(function(){
            $("#buscar").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#miTabla tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script>
</body>
</html>
<?php
  }
  else{
    header("location: ../index.php");
  }

?>




      
    
   
