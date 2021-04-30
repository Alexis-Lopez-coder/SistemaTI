<div class="container">
    <table class="table">
        <caption>Lista de equipos a reparar</caption>
        
        <thead>
            <tr>
                <th scope="col">ID del equipo</th>
                <th scope="col">Datos cliente</th>
                <th scope="col">Descripcion de equipo</th>
                <th scope="col">Fecha de encargo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Liberar</th>
                
            </tr>
        </thead>
        <tbody id="miTabla">
            <tr>
                <?php
                include '../../con.php';

                
                $consulta = "select * from equipos_registrados where estado = 0";
                $resultado = $conexion->query($consulta);

                while($registro = $resultado->fetch_assoc()){
                ?>
                <th scope="row">
                    <?php
                        echo $registro['id'];
                    ?>
                    <!-- ICONOS EN LA TABLA-->
                    <br>
                    <a href="editar-equipo.php?id=<?php echo $registro['id'] ?>">
                        <span><i style="color: white" class="icon_pencil-edit" aria-hidden="true"></i></span>
                    </a>
                </th>
                <td><?php echo $registro['nombre']." ". $registro['apellidos']."<br>".$registro['area']; ?></td>
                <td>
                    <?php echo "Equipo: ".$registro['marca_eq']." ". $registro['modelo_eq']."<br>CPU: ".$registro['marca_cpu']." ". $registro['modelo_cpu']."<br>RAM: ".$registro['marca_ram']." ". $registro['modelo_ram']."<br>Disco Duro: ".$registro['marca_dd']." ". $registro['marc_dd']."<br>Garantia: ".$registro['garantia'];?></td>
                <td><?php echo $registro['fecha_encargo']; ?></td>
                <td>
                    <?php if(strlen($registro['descripcion']) > 25)
                    { 
                        for($i = 0; $i <= strlen($registro['descripcion']); $i++ ){
                            echo $registro['descripcion'][$i];
                            if($i == 25){
                                echo "<br>";
                            }
                        }
                    }
                    else{
                        echo $registro['descripcion'];
                    }  
                    ?>
                        
                </td>
                <td>
                    <a style="color: green" href="liberar.php?id_equipo=<?php echo $registro['id']  ?>">
                        <span><i style="color: green" class="icon_check_alt" aria-hidden="true"></i></span>
                        <br>
                        <?php echo "Liberar";?>
                    </a>
                </td>
                
            </tr>
            <?php } ?>
        </tbody><!--TaBody-->
    </table><!--Table-->
</div>