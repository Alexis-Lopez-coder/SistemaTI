<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar equipo</title>
    <?php include 'estilos-css.php' ?>
</head>
<body>
<div class="container" style="margin-top: 70px;">
    <h3 class="text-center">Actualizar Los Datos</h3>
    <div class="card">
      <div class="card-body">
<?php
    $id = $_GET['id'];
    
    include '../con.php';
    $consulta = "select * from equipos_registrados where id='$id'";
    $resultado = $conexion->query($consulta);
    
    if ($resultado){
   while($datos = $resultado->fetch_assoc()){
?>

        <form action="update_equipo.php" method="POST">

        <div class="row">
            <div class="col">
              <div class="form-group">
                <input style="display: none;" value="<?php echo $datos['id']; ?>"  name="id" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Nombre" hidden >
              </div>
            </div>


            <div class="col">
              <div class="form-group">
                <label for="usuario">Nombre(s) usuario</label>
                <input value="<?php echo $datos['nombre']; ?>"  name="nombre" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Nombre">
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="usuario">Apellidos</label>
                <input value="<?php echo $datos['apellidos']; ?>" name="apellidos" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Apellidos">
              </div>
            </div>


            <div class="col">
              <div class="form-group">
                <label for="usuario">Area</label>
                <input value="<?php echo $datos['area']; ?>" name="area" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Area">
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col">
              <div class="form-group">
                <label for="usuario">Marca del equipo</label>
                <input value="<?php echo $datos['marca_eq']; ?>"" name="marca-pc" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Marca">
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="usuario">Modelo del equipo</label>
                <input value="<?php echo $datos['modelo_eq']; ?>" name="modelo_pc" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Modelo">
              </div>
            </div>

          </div>
          <br>
          <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="usuario">Modelo CPU</label>
                  <input value="<?php echo $datos['modelo_cpu']; ?>" name="modelo_cpu" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Modelo CPU">
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="usuario">Marca CPU</label>
                  <input value="<?php echo $datos['marca_cpu']; ?>" name="marca-cpu" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Marca CPU">
                </div>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="usuario">Modelo RAM</label>
                  <input value="<?php echo $datos['modelo_ram']; ?>" name="modelo_ram" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Modelo RAM">
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="usuario">Marca RAM</label>
                  <input value="<?php echo $datos['marca_ram']; ?>" name="marca_ram" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Marca RAM">
                </div>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="usuario">Modelo Disco Duro</label>
                  <input value="<?php echo $datos['modelo_dd']; ?>" name="modelo_dd" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Modelo Disco Duro">
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="usuario">Marca Disco Duro</label>
                  <input value="<?php echo $datos['marca_dd']; ?>" name="marca_dd" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Marca Disco Duro">
                </div>
              </div>
          </div>
          <br>

            <?php
                
                if(($datos['garantia'] != "NA")){
            ?>
               <div>
                    <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <label for="usuario">Fecha de compra (Garantia)</label>
                        <input value="<?php echo $datos['garantia'] ?>" name="garantia" type="date" class="form-control" aria-describedby="usuarioHelp" >
                        </div>
                    </div>
                    </div>
                </div>     
            <?php
                }
            ?>

          <br>

          <div class="mb-3">
            <label for="validationTextarea">Usuarios y contraseñas</label>
            <textarea name="user_pass" class="form-control" id="validationTextarea" placeholder="Escribe todos los usuarios y contraseñas" required><?php echo $datos['user_pass'] ?></textarea>
          </div>

          <div class="mb-3">
            <label for="validationTextarea">Programas instalados</label>
            <textarea name="software" class="form-control" id="validationTextarea" placeholder="Escribe los programas instalados" required><?php echo $datos['software'] ?></textarea>
          </div>
          <div class="mb-3">
            <label for="validationTextarea">Detalles</label>
            <textarea name="problemas" class="form-control" id="validationTextarea" placeholder="Escribe los programas instalados" required><?php echo $datos['descripcion'] ?></textarea>
          </div>
          <br>
          <center><input type="submit" class="btn btn-primary" value="Actualizar"><span><a href="index.php?o=1" type="button" class="btn btn-secondary">Cancelar</a></span></center>
          <center></center>
        </form>
        <br>
        <br>

      </div>
    </div>
  </div>
</div>



<?php
    }
}
include 'librerias-js.php'
?>
</body>
</html>
