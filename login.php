<?php 
    session_start();
    $loginError = '';
    if (!empty($_POST['username']) && !empty($_POST['pass'])) {
        include ('Push.php');
        $push = new Push();
        $user = $push->loginUsers($_POST['username'], $_POST['pass']);
        if(!empty($user)) {
            $_SESSION['username'] = $user[0]['id_admin'];
            echo "-->". $user[0]['username'];
            header("Location:index.php");
        } else {
            $loginError = "Invalido el usuario o contraseña!";
        }
    }

?>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Inicia Sesión
                    </span>
                    <?php if ($loginError ) { ?>
					    <div class="alert alert-danger"><?php echo $loginError; ?></div>
				    <?php } ?>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Escribe tu usuario correcto">
						<input class="input100" type="text" name="username" placeholder="Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Escribe la contraseña corecta">
						<input class="input100" type="password" name="pass" placeholder="Contraseña">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Entrar
						</button>
					</div>
					<br>
					<h6 align="center">Alexis Lopez Lira - 16590484</h6>
					<br>
				</form>
			</div>
		</div>
	</div>
