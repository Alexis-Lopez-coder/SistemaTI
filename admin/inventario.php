<div class="container">
	<div class="card">
		<div class="card-body">
			<form action="agregar-eq.php" method="POST">

				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="usuario">Nombre(s) del usuario</label>
							<input style="text-transform: uppercase;" name="nombre" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Nombre">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="usuario">Apellidos usuario</label>
							<input style="text-transform: uppercase;" name="apellidos" required type="text" class="form-control" aria-describedby="usuarioHelp" placeholder="Apellidos">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="usuario">Area  de trabajo</label>
							<select required class="form-control" id="" name="area">
								<?php
									//$conexion=mysqli_connect('localhost','user2','123','sistemati');
									include '../con.php';
									$sql = "SELECT * FROM area_empresa";
									$result = $conexion->query($sql);
									while($r = $result->fetch_assoc())
									{
								?>
									<option value="<?php echo $r['id_area']; ?>"><?php echo $r['nombre'] ?></option>
								<?php
									}
								?>
								
							</select>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-group">
							<label>Selecciona la marca del equipo</label>
							<select required class="form-control" id="lista1" name="marca-pc">
								<?php
									//$conexion=mysqli_connect('localhost','user2','123','sistemati');
									include '../con.php';
									$sql = "SELECT * FROM computadoras";
									$result = $conexion->query($sql);
									while($r = $result->fetch_assoc())
									{
								?>
									<option value="<?php echo $r['id']; ?>"><?php echo $r['nombre'] ?></option>
								<?php
									}
								?>
								<option value="otra">Otra</option>
								
							</select>


						</div>
					</div>

					<div class="col">
						<div id="select2lista"></div>

						<!--<div id="modelo" class="col" style="display: none;">
							<label>Escribe otro modelo</label><br>
							<input style='text-transform: uppercase;' class='form-control' aria-describedby='usuarioHelp' required type='text' name='otroModelo2' placeholder='Escribe otro modelo'><br>
						</div>-->

						<div id="garantia2" style="display: none">
							<div class="row">
							<div class="col">
								<div class="form-group">
								<br>
								<label for="usuario">Agrega otro modelo</label>
								<input style="text-transform: uppercase;" placeholder="Modelo PC" name="otroModelo2" type="text" class="form-control" aria-describedby="usuarioHelp" >
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>

				<!-- ==================================================== -->
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label>Selecciona la marca del CPU</label>
							<select required class="form-control" id="lista1CPU" name="marca-cpu">
								<?php
									//$conexion=mysqli_connect('localhost','user2','123','sistemati');
									include '../con.php';
									$sql = "SELECT * FROM cpu";
									$result = $conexion->query($sql);
									while($r = $result->fetch_assoc())
									{
								?>
									<option value="<?php echo $r['id']; ?>"><?php echo $r['nombre'] ?></option>
								<?php
									}
								?>
							</select>

						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label>Escribe un modelo de CPU</label>
							<input name="modelo_cpu" required type="text" style="text-transform: uppercase;" class="form-control" placeholder="Modelo CPU">
						</div>
					</div>
				</div>


					<!-- ==================================================== -->
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label>Selecciona la marca de memoria RAM</label>
							<select required class="form-control" id="lista1CPU" name="marca_ram">
								<?php
									///$conexion=mysqli_connect('localhost','user2','123','sistemati');
									include '../con.php';
									$sql = "SELECT * FROM ram";
									$result = $conexion->query($sql);
									while($r = $result->fetch_assoc())
									{
								?>
									<option value="<?php echo $r['id']; ?>"><?php echo $r['nombre'] ?></option>
								<?php
									}
								?>
							</select>

						</div>
                    </div>
                    <div class="col">
						<div class="form-group">
							<label>Escribe un modelo de RAM</label>
							<input name="modelo_ram" required type="text" style="text-transform: uppercase;" class="form-control" placeholder="Modelo RAM">
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col">
						<div class="form-group">
							<label>Selecciona la marca del disco duro</label>
							<select required class="form-control" id="lista1CPU" name="marca_dd">
								<?php
									//$conexion=mysqli_connect('localhost','user2','123','sistemati');
									include '../con.php';
									$sql = "SELECT * FROM dd";
									$result = $conexion->query($sql);
									while($r = $result->fetch_assoc())
									{
								?>
									<option value="<?php echo $r['id']; ?>"><?php echo $r['nombre'] ?></option>
								<?php
									}
								?>
							</select>

						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label>Escribe un modelo de Disco duro</label>
							<input name="modelo_dd" required type="text" style="text-transform: uppercase;" class="form-control" placeholder="Modelo Disco Duro">
						</div>
					</div>
				</div>

				<!-- ===================================================== -->
				<center>
					<h4>¿Cuenta con garantia?</h4>
					<input onclick="funcion()" type="button" class="btn btn-dark btn-lg" id="nombre-btn" value="Si">
				</center>

				<div id="garantia" style="display: none">
					<div class="row">
					<div class="col">
						<div class="form-group">
						<label for="usuario">Fecha de compra</label>
						<input name="garantia" type="date" class="form-control" aria-describedby="usuarioHelp" >
						</div>
					</div>
					</div>
				</div>


				<br>

                <div class="mb-3">
                    <label for="validationTextarea">Usuarios y contraseñas</label>
                    <textarea name="user_pass" class="form-control" id="validationTextarea" placeholder="Escribe todos los usuarios y contraseñas" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea">Programas instalados</label>
                    <textarea name="software" class="form-control" id="validationTextarea" placeholder="Escribe los programas instalados" required></textarea>
				</div>
				
				<div class="mb-3">
                    <label for="validationTextarea">Describe los problemas</label>
                    <textarea name="problemas" class="form-control" id="validationTextarea" placeholder="Escribe los programas instalados" required></textarea>
				</div>
				
                <br>
                <center><input type="submit" class="btn btn-primary" value="REGISTRAR"></center>	
			</form>
			<br>
			<br>
		</div>
	</div>
</div>