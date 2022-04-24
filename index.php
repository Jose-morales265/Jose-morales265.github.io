<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="img/icono.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<title>Login</title>
</head>
<body>

	<div class="container">

		<div class="row">
			<div class="m-0 p-2">
				<div class="col-12 col-lg-12">
					<div class="fs-5">
						<div class="p-4">
							<div class="text-center">
								<h3>Bienvenido al sistema de gestión de ex-alumnos UPAM</h3>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row m-4">
			<div class="col-12 col-lg-6">
				<img src="img/logoupam5.png" alt="" class="img-fluidmax-width: 100%;height: 100%;">
                <img src="img/logoupam2.png" alt="" class="img-fluidmax-width: 100%;height: 100%;">
			</div>
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="text-center">
						<h5 class="card-header bg-secondary text-white">Iniciar sesión</h5>
						<div class="card-body">
							<form id="form-login">
								<h5 class="card-title p-2 m-2">Complete los datos para acceder</h5>
								<div class="mx-5">
									<div class="form-floating mb-4">
										<input class="form-control" id="user" name="user" type="email" placeholder="Correo">
										<label for="user">Correo</label>
									</div>
									<div class="form-floating mb-4">
										<input class="form-control" id="pass" name="pass" type="password" placeholder="Contraseña">
										<label for="pass">Contraseña</label>
									</div>
								</div>
								<div class="m-2">
										<a class="link-primary" href="login1.php">Inicio ex alumnos</a>
								</div>
								<div class="m-2">
										<a class="link-warning" href="form.php">Registrate aquí</a>
								</div>
								<input type="submit" id="btn-login" class="btn btn-outline-success" value="Iniciar sesión">
								<div class="alert alert-warning d-none" role="alert" id="alerta">
  									Usuario o contraseña incorrecto
								</div>								
							</form>
						</div>
					</div>
				</div>					
			</div>			
		</div>

	</div>



	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/main.js"></script>    

</body>
</html>