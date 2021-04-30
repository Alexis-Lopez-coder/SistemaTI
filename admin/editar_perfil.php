<?php
    session_start();
    $rol = $_SESSION['username'];
    
    include '../con.php';
    include 'estilos-css.php';
    $id_admin = $_POST['id_admin'];
    $contraseña = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $profesion = $_POST['profesion'];
    $admin = $_POST['admin'];

    $ruta="";

    

    if($rol != "alex01")
    {
        if(($_FILES['imagen']['name']) && (($_FILES['imagen']['tmp_name'])))
        {
            //echo "Entro a las imagnes";

            $imagen = $_FILES['imagen']['name']; //Nombre de la imagen
            $archivo = $_FILES['imagen']['tmp_name'];
            //$ruta = "fotos-admins/". $id_admin. $imagen; //fotos-admins/alex01nombrefot0.jpg
            

            $ruta = "fotos/".$id_admin. $imagen;
            //$target_file = $ruta . basename($_FILES['imagen']['name']);
            $uploadOk = 1;
            $imgFileType = strtolower(pathinfo($imagen,PATHINFO_EXTENSION));

            $check = getimagesize($archivo);
            if($check !== false){
                //echo "Si es imagen ".$check['mime'].".";
                $uploadOk = 1;
            }
            else{
                echo "No es una imagen";
                $uploadOk = 0;
                $ruta ="";
            }

            if(file_exists($imagen)){
                echo "Ya eiste el archivo";
                $ruta = "";
            }

            if($_FILES['imagen']['size'] > 2097152){
                echo "Es muy grande";
                $uploadOk = 0;
                $ruta ="";
            }

            if($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg" && $imgFileType != "gif"){
                echo "Formato invalido";
                $uploadOk = 0;
                $ruta = "";
            }
            if($uploadOk == 0){
                echo "El archivo no se pudo cargar";
                $ruta = "";
            }
            else{
                move_uploaded_file($archivo,$ruta);
            }

        }
            
        if($ruta==""){
            $que = "select imagen from admins where id_admin = '$id_admin'";
            $pet = $conexion->query($que);
            if($pet){
                
                while($y = $pet->fetch_assoc()){
                    $img = $y['imagen'];
                }
                echo"<br>";
                echo $img;
                if($img == "fotos/sinfoto.png"){
                    $ruta = "fotos/sinfoto.png";
                }
                else{
                    if($img == ""){
                        $ruta = "fotos/sinfoto.png";
                    }
                    else{
                        $ruta = $img;
                    }
                    
                }
            }
            else{
                echo "Error al hacer la consulta; ". $conexion->error;
            }
            
        }

        if(($ruta =="") && ($uploadOk == 0)){
            echo "Hubo un error al cargar la imagen";
        }
        else
        {
            //echo $ruta;
            $query = "UPDATE admins set contrasena = '$contraseña', nombre = '$nombre', apellidos = '$apellidos', email = '$email', tel = '$tel', profesion = '$profesion', imagen = '$ruta' WHERE id_admin = '$id_admin'";
            //echo "<br>". $query;
            $r = $conexion->query($query);
            if($r){
            ?>
                <div class="container">
                    <div class="alert alert-success" role="alert">
                    Los datos fueron actualizados con exito.
                    </div>
                </div>
                <!--<script> function redireccionarPagina() {window.location = 'index.php?o=5';} setTimeout('redireccionarPagina()', 3000);</script>-->
            <?php
            }
            else{
            ?>
                <div class="container">
                    <div class="alert alert-danger" role="alert">
                    Hubo un error.
                    </div>
                </div>
                <script> function redireccionarPagina() {window.location = 'index.php?o=5';} setTimeout('redireccionarPagina()', 3000);</script>
            <?php
            }
        }
    
    }
    else
    {
        
        $query = "UPDATE admins set contrasena = '$contraseña', nombre = '$nombre', apellidos = '$apellidos', email = '$email', tel = '$tel', profesion = '$profesion', admin = $admin WHERE id_admin = '$id_admin'";
        //echo "<br>". $query;
        $r = $conexion->query($query);
        if($r){
        ?>
            <div class="container">
                <div class="alert alert-success" role="alert">
                Los datos fueron actualizados.
                </div>
            </div>
            <script> function redireccionarPagina() {window.location = 'index.php?o=3';} setTimeout('redireccionarPagina()', 3000);</script>
        <?php
        }
        else{
        ?>
            <div class="container">
                <div class="alert alert-danger" role="alert">
                Hubo un error.
                </div>
            </div>
            <script> function redireccionarPagina() {window.location = 'index.php?o=3';} setTimeout('redireccionarPagina()', 3000);</script>
        <?php
        }
    }
    include 'librerias-js.php';
    ?>