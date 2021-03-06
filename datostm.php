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
                                    Configuraci??n
                                </a>
                                <a class="nav-link" aria-current="page" href="bd/salir.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                    </svg>
                                    Cerrar sesi??n
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!--Formulario de edici??n y tabla-->
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
                                                    <div id="conteo-itm">
                                                        
                                                    </div>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                            </svg>  
                                            Ingenieria en manufactura
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
        								<h4 class="card-header">Edici??n</h4>
        								<div class="card-body">
        									<form id="form-edit-tm">
        										<h6 class="card-tittle">Datos</h6>
        										<div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="hidden" name="idalume5" id="idalume5">
                                                        </div>              
                                                    </div>
        											<div class="col-12 col-lg-12">
        												<div class="mt-2">
        													<input type="text" name="nombre1e5" id="nombre1e5" class="form-control" placeholder="Primer nombre">
        												</div>				
        											</div>
        											<div class="col-12 col-lg-12">
        												<div class="mt-2">
        													<input type="text" name="nombre2e5" id="nombre2e5" class="form-control" placeholder="Segundo nombre">
        												</div>
        											</div>
        											<div class="col-12 col-lg-12">
        												<div class="mt-2">
        													<input type="text" name="apaternoe5" id="apaternoe5" class="form-control" placeholder="Apellido paterno">
        												</div>
        											</div>
        											<div class="col-12 col-lg-12">
        												<div class="mt-2">
        													<input type="text" name="amaternoe5" id="amaternoe5" class="form-control" placeholder="Apellido materno">
        												</div>
        											</div>
        										</div>
        										<h6 class="card-tittle">Carrera</h6>
        										<div class="row">
        											<div class="col-12 col-lg-12">
        												<select id="carrerase5" class="form-control" required="" name="carrerae5">
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
        												<select id="tituloe5" class="form-control" required="" name="tituloe5">
					        								<option>---Seleccione---</option>
					        								<option value="1">Titulado</option>
					        								<option value="2">No titulado</option>
                            								<option value="3">En proceso</option>
				        								</select>
        											</div>
        										</div>
                                                <h6 class="card-tittle">Situaci??n laboral</h6>
                                                <div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <select id="trabajoe5" class="form-control" required="" name="trabajoe5">
                                                            <option>---Seleccione---</option>
                                                            <option value="1">Trabajando</option>
                                                            <option value="2">No trabajando</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="text" name="razone5" placeholder="motivo" class="form-control" id="razone5">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="card-tittle">Informaci??n de contacto</h6>
                                                <div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="text" name="telecele5" placeholder="Tel. cel" id="telecele5" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="text" name="telfie5" placeholder="Tel. fijo" id="telfie5" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <div class="mt-2">
                                                            <input type="text" name="correoe5" placeholder="Correo" id="correoe5" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <div class="mt-2">
                                                        <input class="btn btn-outline-primary" type="submit" id="btn-edit5" value="Guardar">   
                                                    </div>
                                                </div>
                                                <div class="alert alert-success d-none" role="alert" id="alert-itm-1">
                                                    Datos actualizados satisfactoriamente
                                                </div>
                                                <div class="alert alert-danger d-none" role="alert" id="alert-itm-2">
                                                    Error en la conexion o en el envio de datos
                                                </div>
                                                <div class="alert alert-warning d-none" role="alert" id="alert-itm-3">
                                                    Complete los campos vacios
                                                </div>
                                                <div class="alert alert-warning d-none" role="alert" id="alert-itm-4">
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
                                                                <input type="search" name="search" id="search" placeholder="Ingresa aqu?? una palabra" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="mt-4">
                                                    <div class="card" id="result-search5">
                                                        <div class="mt-4">
                                                            <div class="card-body">
                                                                <ul id="container5"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="mt-4">
                                                    <table class="table table-bordered table-sm" id="tbitm">
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
                                                        <tbody id="tb-datos5"></tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="mt-4">
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-success" id="btn-export-itm">
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