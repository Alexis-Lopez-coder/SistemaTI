<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <?php include 'estilos-css.php' ?>
</head>
<body>
    
<div class="container">
    <h3>Editar Perfil</h3>
    <?php
        $id = $_GET['id_admin'];
        include '../con.php';
        $q = "SELECT * FROM admins where id_admin = '$id'";
        $res = $conexion->query($q);
        while($r = $res->fetch_assoc()){
    ?>
    <form method="POST" action="editar_perfil.php">
        <div style="display: none;" class="form-group">
            <label for="id">ID de usuario</label>
            <input value="<?php echo $r['id_admin'] ?>" type="text" max="10" class="form-control" name="id_admin" aria-describedby="ayudaId" placeholder="Escribe un usuario">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input value="<?php echo $r['contrasena'] ?>" required type="text" class="form-control" name="pass" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="id">Nombre(s) del usuario</label>
            <input value="<?php echo $r['nombre'] ?>" required	type="text" class="form-control" name="nombre" aria-describedby="ayudaId" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="id">Apellidos</label>
            <input value="<?php echo $r['apellidos'] ?>" required type="text" class="form-control" name="apellidos" aria-describedby="ayudaId" placeholder="Apellidos">
        </div>
        <div class="form-group">
            <label for="id">Email</label>
            <input value="<?php echo $r['email'] ?>" required type="email" class="form-control" name="email" aria-describedby="ayudaId" placeholder="Correo">
        </div>
        <div class="form-group">
            <label for="id">Telefono</label>
            <input value="<?php echo $r['tel'] ?>"  required step="0.5" pattern="\x2b[0-9]" min="1000000000" max="9999999999" type="number" class="form-control" name="numero" aria-describedby="ayudaId" placeholder="Telefono">
        </div>
        <div class="form-group">
            <label for="id">Profesion</label>
            <input value="<?php echo $r['profesion'] ?>" required type="text" class="form-control" name="profesion" aria-describedby="ayudaId" placeholder="Profesion">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tipo de usuario (Admin = 1 No Admin = 0)</label>
            <input value="<?php echo $r['admin'] ?>" required step="0.5" pattern="\x2b[0-9]" max="1" name="admin" type="number" class="form-control" placeholder="Escribe 0/1">
        </div>
        <?php  }?>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a type="button" href="index.php?o=3" class="btn btn-secondary">Cancelar</a>
    </form>
    
       
</div>
<?php include 'librerias-js.php' ?>
</body>
</html>

