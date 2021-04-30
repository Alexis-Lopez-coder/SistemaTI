<?php
    include '../con.php';

    $qNotif = "select id, DATE_FORMAT(fecha_encargo, '%H:%i:%S' ) as hora, DATE_FORMAT(fecha_encargo, '%d-%m-%Y') as fecha, marca_eq, modelo_eq, nombre, apellidos, marca_cpu, modelo_cpu, marca_ram, modelo_ram, marca_dd, modelo_dd, leido  from equipos_registrados order by fecha_encargo desc";
    $rNotif = $conexion->query($qNotif);
    
    


    $horas = 0;
    
    

?>
        <div class="main" >
            <ul  class="cards">
                <?php
                    if($rNotif){
                        while($rN = $rNotif->fetch_assoc()){
                
                       
                            $hActual = date("H");
                            $mActual = date("i");
                            $sActual = date("s");
                            $porciones = explode(":", $rN['hora']);
                            $hRegistro = $porciones[0];
                            $mRegistro = $porciones[1];
                            $sRegistro = $porciones[2];
                            $min;

                            $dActual = date("d");
                            $porciones2 = explode("-",$rN['fecha']);
                            $dRegistro = $porciones2['0'];

                            

                            
                

                ?>
                <li id="notif" class="cards_item">
                    
                <div id="contenido" class="card">
                    <div class="card_image"><img src="">
                        Agregado hace: <?php 
                        if(($dActual - $dRegistro) > 0){
                            echo $dActual - $dRegistro . " días";
                        }
                        else
                        {
                            //Horas
                            if((($hActual - $hRegistro) < 24) && ($hActual - $hRegistro) >= 1){
                                if($mActual == $mRegistro){
                                    if($hActual - $hRegistro != 0){
                                        echo $hActual - $hRegistro ." horas ";
                                    }
                                   
                                }
                                else
                                {
                                    if(($hActual - $hRegistro)-1 != 0)
                                        echo ($hActual - $hRegistro)-1 ." hora(s) ";
                                }
                            }

                            //Minutos
                            if($mActual>$mRegistro){
                                $min = $mActual - $mRegistro;
                                if((60 - $min) > 0){
                                    echo $min." minuto(s) ";
                                }
                                else
                                {
                                    if((60 - $mRegistro) != $mRegistro){
                                        echo 60 - $mRegistro ." minuto(s) ";
                                    }
                                }
                                
                            }
                            else{
                                $min = 60 - $mRegistro;
                                if(($mActual + $min) != 60)
                                    echo $mActual + $min. " minutos";
                            }
                            

                            //Segundos(60 - $mRegistro)
                            if($sActual > $sRegistro){
                                echo $sActual - $sRegistro . " segundos";

                            }
                        }
                        
                        ?> 
                    </div>
                    
                    <div   class="card_content" style="background-color:<?php if($rN['leido'] == 1){echo "#1869e2"; }else{ echo " #e20e31 "; } /*if(($dActual - $dRegistro) > 0){ echo " #e20e31 ";}else{ echo "#1869e2";} */?>;">
                        <h4 class="card_title"><?php echo $rN['marca_eq']." - ". $rN['modelo_eq'] ?></h4>
                        <p class="card_text"><strong>Cliente</strong> <?php $cliente = $rN['nombre']." ". $rN['apellidos']; echo $cliente."<br><strong>Hora de registro: ". $rN['hora']."</strong>"; ?></p>
                        <p class="card_text"><strong>RAM:</strong> <?php echo $rN['marca_ram']." ". $rN['modelo_ram'] ?></p>
                        <p class="card_text"><strong>CPU:</strong> <?php echo $rN['marca_cpu']." ". $rN['modelo_cpu'] ?></p>
                        <p class="card_text"><strong>DD:</strong> <?php echo $rN['marca_dd']." ". $rN['modelo_dd'] ?></p>
                        <?php
                            if($rN['leido'] == 1){
                        ?>
                            <a style="color: white;" href="index.php?o=1" class="btnn card_btn">Leído</a>
                        <?php  
                            }
                            else
                            {
                        ?>
                            <a style="color: white;" class="btnn card_btn" href="index.php?o=6&marcado=<?php echo "1&id=". $rN['id'] ?>" name="leido">Marcar como leido</a>
                        <?php
                            }
                        ?>
                        
                    </div>
                </div>
                </li>
                <?php
                        }
                    }
                ?>
            </ul>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerar</button>
                </div>
                </div>
                
            </div>
        </div>