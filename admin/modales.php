<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario del sistem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method="POST" action="agregar-admin.php">
		  	<div class="form-group">
			  <label for="id">ID de usuario</label>
			  <input type="text" max="10" class="form-control" name="id_admin" aria-describedby="ayudaId" placeholder="Escribe un usuario">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Contraseña</label>
				<input required type="password" class="form-control" name="pass" placeholder="Password">
			</div>
			<div class="form-group">
			  <label for="id">Nombre(s) del usuario</label>
			  <input required	type="text" class="form-control" name="nombre" aria-describedby="ayudaId" placeholder="Nombre">
			</div>
			<div class="form-group">
			  <label for="id">Apellidos</label>
			  <input required type="text" class="form-control" name="apellidos" aria-describedby="ayudaId" placeholder="Apellidos">
			</div>
			<div class="form-group">
			  <label for="id">Email</label>
			  <input required type="email" class="form-control" name="email" aria-describedby="ayudaId" placeholder="Correo">
			</div>
			<div class="form-group">
			  <label for="id">Telefono</label>
			  <input required step="0.5" pattern="\x2b[0-9]" min="1000000000" max="9999999999" type="number" class="form-control" name="numero" aria-describedby="ayudaId" placeholder="Telefono">
			</div>
			<div class="form-group">
			  <label for="id">Profesion</label>
			  <input required type="text" class="form-control" name="profesion" aria-describedby="ayudaId" placeholder="Profesion">
			</div>
			<div class="form-check">
				<input value="1" type="checkbox" class="form-check-input" name="esAdmin">
				<label class="form-check-label" for="exampleCheck1">¿Sera administrador?</label>
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		<a href="index.php?o=<?php echo"3" ?>" type="button" class="btn btn-secondary">Ver usuarios</a>
      </div>
    </div>
  </div>
</div>