<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="img/icono.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Registro</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-1"></div>
			<div class="col-12 col-lg-10">
				<div class="card">
					<div class="m-5">
						<div class="bg-secondary">
							<h5 class="card-header bg-secondary text-white">Registrese</h5>
						</div>
						<div class="card-body">
							<form id="form-reg">
								<h6 class="card-title p-2 m-2">Datos personales</h6>
								<p class="p-2 m-2">Si no cuenta con un segundo nombre no ingrese nada</p>
								<div class="row">
									<div class="col-12 col-lg-3">
										<div class="form-floating mb-4">
											<input class="form-control" id="nombre1" name="nombre1" type="text" placeholder="Primer nombre *">
											<label for="nombre1">Primer nombre *</label>
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<div class="form-floating mb-4">
											<input class="form-control" id="nombre2" name="nombre2" type="text" placeholder="Segundo nombre">
											<label for="nombre2">Segundo nombre</label>
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<div class="form-floating mb-4">
											<input class="form-control" id="apaterno" name="apaterno" type="text" placeholder="Apellido Paterno *">
											<label for="apaterno">Apellido Paterno *</label>
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<div class="form-floating mb-4">
											<input class="form-control" id="amaterno" name="amaterno" type="text" placeholder="Apellido Materno *">
											<label for="amaterno">Apellido Materno *</label>
										</div>
									</div>
								</div>
								<h6 class="card-title p-2 m-2">Seleccione su carrera *</h6>
								<div class="row">
									<div class="col-12 col-lg-12">
										<fieldset>
                                        	<label><input type="radio" name="RC" value="1" id="rc1" class="m-3">Software</label>
                                        	<label><input type="radio" name="RC" value="2" id="rc2" class="m-3">Energia</label>
                                        	<label><input type="radio" name="RC" value="3" id="rc3" class="m-3">Terapia fisica</label>
                                        	<label><input type="radio" name="RC" value="4" id="rc4" class="m-3">Automotriz</label>
                                        	<label><input type="radio" name="RC" value="5" id="rc5" class="m-3">Manufactura</label>
                                    	</fieldset>
									</div>
								</div>
								<h6 class="card-title p-2 m-2">Estado de titulación *</h6>			
								<div class="row">
									<div class="col-12 col-lg-12">
										<fieldset>
                                        	<label ><input type="radio" name="RE" value="1" id="re1" class="m-3">Titulado</label>
                                        	<label ><input type="radio" name="RE" value="2" id="re2" class="m-3">No titulado</label>
                                        	<label ><input type="radio" name="RE" value="3" id="re3" class="m-3">En proceso</label>
                                    	</fieldset>
									</div>
								</div>
								<h6 class="card-title p-2 m-2">¿Se encuentra trabajando? *</h6>
								<div class="row">
									<div class="col-12 col-lg-6">
										<fieldset>
                                            <label><input type="radio" name="RS" value="1" id="rs1" class="m-3">Si</label>
                                            <label><input type="radio" name="RS" value="2" id="rs2" class="m-3">No</label>
                                        </fieldset>
									</div>
									<div class="col-12 col-lg-6">
										<div class="form-floating mb-4">
											<input class="form-control" id="razon" name="razon" type="text" placeholder="Motivo *">
											<label for="razon">Motivo *</label>
										</div>
									</div>
								</div>
								<h6 class="card-title p-2 m-2">Datos de contacto</h6>
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="form-floating mb-4">
											<input type="text" maxlength="8" name="telfi" id="telfi" placeholder="Telefono fijo" class="form-control" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1" />
											<label for="telfi">Telefono fijo</label>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="form-floating mb-4">
											<input type="text" maxlength="10" name="telecel" id="telecel" placeholder="Telefono celular *" class="form-control" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1" />
											<label for="telecel">Telefono celular *</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="form-floating mb-4">
											<input class="form-control" id="correo" name="correo" type="email" placeholder="Correo de contacto *">
											<label for="correo">Correo de contacto *</label>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="form-floating mb-4">
											<input class="form-control" id="pass" name="pass" type="password" placeholder="Cree una contraseña *">
											<label for="pass">Cree una contraseña *</label>
										</div>
									</div>
								</div>
								<div class="row text-center">
									<div class="col-12 col-lg-6">
										<div class="mt-2">
											<a class="btn btn-danger" href="index.php">Cancelar</a>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="mt-2">
											<input type="submit" id="btn-reg" class="btn btn-success" value="Registrarme">
										</div>
									</div>
									<div class="alert alert-success d-none" role="alert" id="alert-sesion">
  										Ya puede iniciar sesion con el usuario registrado <a href="index.php" class="link-success">click aquí</a>
									</div>
									<div class="alert alert-warning d-none" role="alert" id="alerta">
  										Complete los campos obligatorios *
									</div>
									<div class="alert alert-danger d-none" role="alert" id="alerta2">
  										Ya puede iniciar sesion con el usuario registrado <a href="index.php" class="link-success">click aquí</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-1"></div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>