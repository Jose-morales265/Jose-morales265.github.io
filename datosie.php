<?php
	session_start();
	if (isset($_SESSION["usuario"])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="img/icono.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<title>Carrera</title>
</head>
<body>
	<!--Barra de navegacion-->

	<header class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-gradient fs-5">
                <div class="container-fluid">
                    <div class="m-3">
                        <a class="navbar-brand" href="#">
                            <img src="img/logoupam3.png" alt="" width="30" height="30">
                            Gestion ex-Alumnos
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="floa-end">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" aria-current="page" href="admin.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                    </svg>
                                    Inicio
                                </a>
                                <a class="nav-link" aria-current="page" href="config.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                    Configuración
                                </a>
                                <a class="nav-link" aria-current="page" href="bd/salir.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                    </svg>
                                    Cerrar sesión
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!--Formulario de edición y tabla-->
        <div class="container">
        	<div class="mt-5">
        		<div class="pt-5">
        			<div class="mb-4">
        				<div class="row">
        					<div class="col-12 col-lg-4">
        						<div class="card-body">
        							<div class="mt-4">
        								<div class="fs-3">
        									<div class="m-3">
        										<div class="text-center">
        											<h2 id="conteo">
                                                    <h4>Alumno(s):</h4>
                                                    <div id="conteo-iee"></div>
                                                    </h2>
        										</div>
        									</div>
        								</div>
        							</div>
        						</div>
        					</div>
        					<div class="col-12 col-lg-8">
        						<div class="card-body">
        							<div class="mt-4">
        								<h2>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                                                <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
                                            </svg>
                                            Ingenieria en Energia
                                        </h2>
        							</div>
        						</div>
        					</div>
        				</div>

        				<div class="row">
                            <div class="text-center">
                                    <p class="link-primary">Haga click en el ID o clave de una columna para comenzar a editar.</p>
                                </div>
                                <div class="text-center">
                                    <p class="link-danger">Haga click en el boton de la fecha para eliminar una columna.</p>
                                </div>
        						<div class="col-12 col-lg-3">
        							<!--Formulario-->
        							<div class="card">
        								<h4 class="card-header">Edición</h4>
        								<div class="card-body">
        									<form id="form-edit-iee">
        										<h6 class="card-tittle">Datos</h6>
        										<div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="hidden" name="idalume3" id="idalume3">
                                                        </div>              
                                                    </div>
        											<div class="col-12 col-lg-12">
        												<div class="mt-2">
        													<input type="text" name="nombre1e3" id="nombre1e3" class="form-control" placeholder="Primer nombre">
        												</div>				
        											</div>
        											<div class="col-12 col-lg-12">
        												<div class="mt-2">
        													<input type="text" name="nombre2e3" id="nombre2e3" class="form-control" placeholder="Segundo nombre">
        												</div>
        											</div>
        											<div class="col-12 col-lg-12">
        												<div class="mt-2">
        													<input type="text" name="apaternoe3" id="apaternoe3" class="form-control" placeholder="Apellido paterno">
        												</div>
        											</div>
        											<div class="col-12 col-lg-12">
        												<div class="mt-2">
        													<input type="text" name="amaternoe3" id="amaternoe3" class="form-control" placeholder="Apellido materno">
        												</div>
        											</div>
        										</div>
        										<h6 class="card-tittle">Carrera</h6>
        										<div class="row">
        											<div class="col-12 col-lg-12">
        												<select id="carrerase3" class="form-control" required="" name="carrerae3">
					        								<option>---Seleccione---</option>
					        								<option value="1">Software</option>
					        								<option value="2">Energia</option>
					        								<option value="3">Terapia</option>
					        								<option value="4">Automotriz</option>
					        								<option value="5">Manufactura</option>
				        								</select>
        											</div>
        										</div>
        										<h6 class="card-tittle">Estatus actual</h6>
        										<div class="row">
        											<div class="col-12 col-lg-12">
        												<select id="tituloe3" class="form-control" required="" name="tituloe3">
					        								<option>---Seleccione---</option>
					        								<option value="1">Titulado</option>
					        								<option value="2">No titulado</option>
                            								<option value="3">En proceso</option>
				        								</select>
        											</div>
        										</div>
                                                <h6 class="card-tittle">Situación laboral</h6>
                                                <div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <select id="trabajoe3" class="form-control" required="" name="trabajoe3">
                                                            <option>---Seleccione---</option>
                                                            <option value="1">Trabajando</option>
                                                            <option value="2">No trabajando</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="text" name="razone3" placeholder="motivo" class="form-control" id="razone3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="card-tittle">Información de contacto</h6>
                                                <div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="text" name="telecele3" placeholder="Tel. cel" id="telecele3" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="text" name="telfie3" placeholder="Tel. fijo" id="telfie3" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="text" name="correoe3" placeholder="Correo" id="correoe3" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <div class="mt-2">
                                                        <input class="btn btn-outline-primary" type="submit" id="btn-edit3" value="Guardar">   
                                                    </div>
                                                </div>
                                                <div class="alert alert-success d-none" role="alert" id="alert-iee-1">
                                                    Datos actualizados satisfactoriamente
                                                </div>
                                                <div class="alert alert-danger d-none" role="alert" id="alert-iee-2">
                                                    Error en la conexion o en el envio de datos
                                                </div>
                                                <div class="alert alert-warning d-none" role="alert" id="alert-iee-3">
                                                    Complete los campos vacios
                                                </div>
                                                <div class="alert alert-warning d-none" role="alert" id="alert-iee-4">
                                                    Error al encontrar los datos
                                                </div>
        									</form>
        								</div>
        							</div>
        						</div>
        						<div class="col-12 col-lg-9">
        							<!--Tabla por datos-->
                                    <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <form id="form-search">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-8">
                                                            <div class="mt-2">
                                                                <input type="search" name="search" id="search" placeholder="Ingresa aquí una palabra" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="mt-4">
                                                    <div class="card" id="result-search3">
                                                        <div class="mt-4">
                                                            <div class="card-body">
                                                                <ul id="container3"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="mt-4">
                                                    <table class="table table-bordered table-sm" id="tbiee">
                                                        <thead>
                                                            <tr>
                                                                <td>Id</td>
                                                                <td>Nombre</td>
                                                                <td>Nombre</td>
                                                                <td>A. paterno</td>
                                                                <td>A. materno</td>
                                                                <td>Carrera</td>
                                                                <td>Estatus</td>
                                                                <td>Trabajo</td>
                                                                <td>Tel. Cel</td>
                                                                <td>Fecha reg</td>
                                                                </tr>
                                                        </thead>
                                                        <tbody id="tb-datos3"></tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="mt-4">
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-success" id="btn-export-iee">
                                                            Exportar tabla
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
        						</div>        					
        				</div>
        			</div>
        		</div>
        	</div>
        	
        </div>

	<script src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.table2excel.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php
}else{
	header("location:index.php");
}
?>