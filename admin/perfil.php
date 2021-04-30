<?php 
    $user = $_SESSION['username'];

    include '../con.php';
    
    $qPerfil = "SELECT * FROM admins where id_admin = '$user'";
    $nombre;

    $res = $conexion->query($qPerfil);

    if($res){
        while($r = $res->fetch_assoc()){
            $nombre = $r['nombre'];


?>
<div class="container emp-profile">
    <form action="editar_perfil.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="<?php echo $r['imagen'] ?>" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Cambiar foto<br> <?php echo $r['imagen'] ?>
                        <input type="file" name="imagen"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h2>
                                <?php echo "ID de usuario: <strong>". $user."</strong>"; ?>
                            </h2>
                            <h6>
                                <?php echo $r['profesion']?>
                            </h6>
                           
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Ver Informacion</a>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">

                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="id_admin" style="display: none;" value="<?php echo $r['id_admin'] ?>" class="form-control form-control-sm" type="text" placeholder="ID usuario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Contraseña</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input required name="pass" value="<?php echo $r['contrasena']  ?>" class="form-control form-control-sm" type="text" placeholder="Contraseña">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombre</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input required required name="nombre" value="<?php echo $r['nombre']  ?>" class="form-control form-control-sm" type="text" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Apellidos</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input required required name="apellidos" value="<?php echo $r['apellidos'] ?>" class="form-control form-control-sm" type="text" placeholder="Apellidos">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input required name="email" value="<?php echo $r['email'] ?>" class="form-control form-control-sm" type="mail" placeholder="Correo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Teléfono</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input required name="tel"  value="<?php echo $r['tel'] ?>" step="0.5" pattern="\x2b[0-9]" min="1000000000" max="9999999999" type="number" class="form-control form-control-sm" placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input required name="profesion" value="<?php echo $r['profesion'] ?>" class="form-control form-control-sm" type="text" placeholder="Profesion">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="btn btn-primary" type="submit" value="Listo">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>




                </div>
            </div>
        </div>
    </form>           
</div>
<?php
     }
}
?>