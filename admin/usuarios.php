<div class="container">
    <table class="table">
        <caption>Lista de usuarios</caption>

        <thead>
            <tr>
                <th scope="col">ID del usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Contacto</th>
                <th scope="col">Profesion</th>
                <th scope="col">Administrador</th>

            </tr>
        </thead>
        <tbody id="miTabla">
            <tr>
                <?php
                include '../../con.php';


                $consulta = "select * from admins";
                $resultado = $conexion->query($consulta);

                while ($registro = $resultado->fetch_assoc()) {
                ?>
                    <th scope="row">
                        <?php
                        echo $registro['id'];
                        ?>
                        <!-- ICONOS EN LA TABLA-->
                        <br>

                        <?php echo $registro['id_admin'] ?>
                        <?php
                        if ($registro['id_admin'] != "alex01") {
                        ?>
                            <a style="color: white" href="eliminar-perfil-admin.php?id_admin=<?php echo $registro['id_admin'] ?>">
                                <span><i style="color: white" class="icon_trash_alt" aria-hidden="true"></i></span>
                            </a>
                        <?php
                        }
                        ?>
                        <a style="color: white" href="editar-perfil-admin.php?id_admin=<?php echo $registro['id_admin'] ?>">
                            <span><i style="color: white" class="icon_pencil-edit" aria-hidden="true"></i></span>
                        </a>



                    </th>
                    <td><?php echo $registro['nombre'] . " " . $registro['apellidos']; ?></td>
                    <td>
                        <?php echo "Teléfono: " . $registro['tel'] . "<br>Correo: " . $registro['email']; ?></td>
                    <td><?php echo $registro['profesion']; ?></td>
                    <td><?php if ($registro['admin'] == 1) {
                            echo "Admin";
                        } else {
                            echo "No admin";
                        } ?></td>
            </tr>
        <?php } ?>
        </tbody>
        <!--TaBody-->
    </table>
    <!--Table-->
</div>