<div class="container">
    <table class="table">
        <caption>Lista de equipos</caption>

        <thead>
            <tr>
                <th scope="col">ID del equipo</th>
                <th scope="col">Datos cliente</th>
                <th scope="col">Descripcion de equipo</th>
                <th scope="col">Fecha de encargo</th>
                <th scope="col">Fecha de entrega</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Generar reporte</th>

            </tr>
        </thead>
        <tbody id="miTabla">
            <tr>
                <?php
                include '../../con.php';


                $consulta = "select * from equipos_registrados";
                $resultado = $conexion->query($consulta);

                while ($registro = $resultado->fetch_assoc()) {
                ?>
                    <th scope="row">
                        <?php
                        echo $registro['id_equipo'] . "<br>";
                        ?>

                        <?php echo $registro['id'] ?><br><?php if ($registro['estado'] == 1) { ?> <a style="color: white;" href="regresar.php?id_equipo=<?php echo $registro['id']  ?>"> Devolver a reparacion<br><span><i style="color: white" class="arrow_back" aria-hidden="true"></i></span></a><?php } else {
                                                                                                                                                                                                                                                                                                        echo "En proceso";
                                                                                                                                                                                                                                                                                                    } ?>

                    </th>
                    <td><?php echo $registro['nombre'] . " " . $registro['apellidos'] . "<br>" . $registro['area']; ?></td>
                    <td>
                        <?php echo "Equipo: " . $registro['marca_eq'] . " " . $registro['Modelo_eq'] . "<br>CPU: " . $registro['marca_cpu'] . " " . $registro['modelo_cpu'] . "<br>RAM: " . $registro['marca_ram'] . " " . $registro['modelo_ram'] . "<br>Disco Duro: " . $registro['marca_dd'] . " " . $registro['marc_dd'] . "<br>Garantia: " . $registro['garantia']; ?></td>
                    <td><?php echo $registro['fecha_encargo']; ?></td>
                    <td><?php echo $registro['fecha_entrega']; ?></td>
                    <td>
                        <?php if (strlen($registro['descripcion']) > 25) {
                            for ($i = 0; $i <= strlen($registro['descripcion']); $i++) {
                                echo $registro['descripcion'][$i];
                                if ($i == 25) {
                                    echo "<br>";
                                }
                            }
                        } else {
                            echo $registro['descripcion'];
                        }
                        ?>
                    </td>
                    <td>
                        <a href="pdf/reporte.php?id_equipo=<?php echo $registro['id']  ?>">
                            <span><i style="color: black" class="icon_document_alt" aria-hidden="true"></i></span>
                            <br>
                            <?php if ($registro['estado'] == 1) {
                                echo "Reparado";
                            } else {
                                echo "En proceso";
                            } ?>
                        </a>
                    </td>

            </tr>
        <?php } ?>
        </tbody>
        <!--TaBody-->
    </table>
    <!--Table-->
</div>