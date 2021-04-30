<?php
    include '../con.php';
    include 'estilos-css.php';

    include 'variables.php';

    $fecha_hoy = date('Y-m-d H:i:s');
    $estado = 0;


    if(!empty($garantia)){
        $garantia = strval($garantia);
        if($garantia == "1969-12-31"){
            $garantia = "NA";
        }
    }
    else{
        $garantia = "NA";
    }

    if($otraPCInput != ""){
        $otraPCID = strtolower($otraPCInput);
        $otraPC = strtoupper($otraPCInput);
        $qPC = "INSERT INTO computadoras values ('$otraPCID','$otraPC')";

        $r1 = $conexion->query($qPC);

        if($r1 == FALSE){
        ?>
                <div class="alert alert-danger" role="alert">
                    No se pudo ingresar la marca PC <?php echo $otraPCID; ?>.
                </div>
        <?php
        }
        

       
        

        $arreglo = explode(" ", $modeloPCInput);
        $id_mod;
        foreach ($arreglo as $value) {
            $id_mod = $id_mod."". strtolower($value);
        }

        $qModelo = "INSERT INTO modelos_pc values ('$id_mod','$otraPCID','$modeloPCInput')";
        
        $r2 = $conexion->query($qModelo);
        if($r2 == FALSE){
            ?>
                <div class="alert alert-danger" role="alert">
                    No se pudo ingresar el modelo PC <?php echo $id_mod; ?>.
                </div>
            <?php
        }
        
        

    }

    if($modeloPCInput1 != ""){
        $otraPCID = strtolower($marcaPC);
        $arreglo = explode(" ", $modeloPCInput1);
        $id_mod;
        foreach ($arreglo as $value) {
            $id_mod = $id_mod."". strtolower($value);
        }
        $modeloPCInput1 = strtoupper($modeloPCInput1);
        $qModelo = "INSERT INTO modelos_pc values ('$id_mod','$otraPCID','$modeloPCInput1')";
        $r2 = $conexion->query($qModelo);
        if($r2){
?>
            <div class="alert alert-danger" role="alert">
                No se pudo ingresar el modelo PC.
            </div>
<?php
        }


    }
    $valoresDB = "(nombre, apellidos, area, marca_eq, modelo_eq, marca_cpu, modelo_cpu, marca_ram, modelo_ram, marca_dd, modelo_dd, garantia, user_pass, software, fecha_encargo, descripcion, fecha_entrega, estado, leido)";
    $query;
    if((!empty($nombre)) && (!empty($apellidos)) && !(empty($area)))
    {
        if(!empty($otraPCInput)){
            if(!empty($modeloPCInput)){
                $query = "INSERT INTO equipos_registrados ". $valoresDB." VALUES ('$nombre','$apellidos','$area', '$otraPCInput','$modeloPCInput','$marca_cpu','$modelo_cpu','$marca_ram','$modelo_ram','$marca_dd','$modelo_dd','$garantia','$user_pass','$software','$fecha_hoy','$descripcion','NA',0,0)";
            }
            else{
                echo "No se registro ningun modelo de PC primero";
            }
            

        }
        
        if(!empty($marcaPC)){
            
            if(!empty($otroModeloInput1)){
                $query = "INSERT INTO equipos_registrados". $valoresDB." VALUES ('$nombre','$apellidos','$area', '$marcaPC','$otroModeloInput1','$marca_cpu','$modelo_cpu','$marca_ram','$modelo_ram','$marca_dd','$modelo_dd','$garantia','$user_pass','$software','$fecha_hoy','$descripcion','NA',0,0)";
            }
            else{
                if(!empty($modeloPC)){
                    
                    if(!empty($modeloPC)){
                        $query = "INSERT INTO equipos_registrados ". $valoresDB." VALUES ('$nombre','$apellidos','$area', '$marcaPC','$modeloPC','$marca_cpu','$modelo_cpu','$marca_ram','$modelo_ram','$marca_dd','$modelo_dd','$garantia','$user_pass','$software','$fecha_hoy','$descripcion','NA',0,0)";
                    }
                    else{
                        echo "No se registro ningun modelo PC...";
                        
                    }
                        
                }
                
            }
        }

        
        
        $res = $conexion->query($query);
        if($res)
        {
?>
            <div class="container">
                <div class="alert alert-success" role="alert">
                    El equipo ha sido registrado correctamente <?php echo $query; ?>.
                </div>
            </div>
            <script> function redireccionarPagina() {window.location = 'index.php?o=2';} setTimeout('redireccionarPagina()', 3000);</script>
<?php            
        }
        else
        {
?>
            <div class="container">
                <div class="alert alert-danger" role="alert">
                    Hubo un error al agregar el equipo. <?php echo  "->".$conexion->error; ?>
                </div>
            </div>
            <script> function redireccionarPagina() {window.location = 'index.php?o=2';} setTimeout('redireccionarPagina()', 3000);</script>
<?php            
        }
        
    }
    else
    {
?>
        <div class="container">
            <div class="alert alert-danger" role="alert">
                Llena todos los campos de formulario.
            </div>
        </div>
        <script> function redireccionarPagina() {window.location = 'index.php?o=2';} setTimeout('redireccionarPagina()', 3000);</script>
<?php        
    }

    include 'librerias-js.php';
?>