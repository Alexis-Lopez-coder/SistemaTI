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
        <a href="#"><img style="margin-top: 8px;" src="images/icono.png" alt="logo"></a>
      </div>
      
      <div id="navbar" class="navbar-collapse collapse">
          
        <ul class="nav navbar-nav">
          <li><a href="index.php?o=<?php echo "1" ?>"><i class="las la-laptop"></i> Equipos a reparar</a></li>
          <li><a href="index.php?o=<?php echo "2" ?>"><i class="las la-database"></i> Registrar equipo</a></li>
          <?php if($usuario == 'alex01'){ ?><a style="margin-left: 10px; margin-top: 8px; " type="button" class="btn btn-primary" data-toggle="modal" data-target="#add"><i class="las la-plus-circle"></i> Add admins</a><?php } ?>
          <li><a href="index.php?o=<?php echo "4" ?>"><i class="las la-file-alt"></i> Reportes</a></li>
         
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="las la-bell"></i>
                Notificaciones <strong><?php echo $fila['total'] + $valor['t']; ?></strong><span class="caret"></span></a>
              <ul class="dropdown-menu">
              
                <li>
                  <a href="index.php?o=<?php echo "6" ?>">
                  <i class="las la-tools"></i>
                    Tienes <?php echo $valor['t']; ?> notificaciones de los equipos de computo.
                  </a>
                </li>
               
              </ul>

            </li>


        </ul>
<?php if(($opc != 6) && ($opc != 2) && ($opc != 5)){ ?><li><input id="buscar" style="margin-top: 8px;" class="form-control mr-sm-2" type="search" placeholder="Busca nombre del <?php if($opc != 3){ ?>cliente <?php }else{ echo "admin";} ?>" aria-label="Buscar"></li><?php } ?>
        </ul>
        
        
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="las la-user-circle"></i> <?php echo $usuario; ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?o=<?php echo "5" ?>"><i class="las la-user-cog"></i> Mi Perfil</a></li>
              <li role="separator" class="divider"></li>
              <?php if($usuario == 'alex01'){ ?> <li><a href="index.php?o=<?php echo"3" ?>" ?><i class="las la-object-group"></i> Ver usuarios</a></li> <?php } ?>
              <li role="separator" class="divider"></li>
              <li><a href="../logout.php"><i class="las la-sign-out-alt"></i> Cerrar Sesion</a></li>
              
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse-->
    </div>
  </nav>
