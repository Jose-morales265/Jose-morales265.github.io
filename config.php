<?php
session_start();
if (isset($_SESSION["usuario"]) && isset($_SESSION["ID"])){
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
	<title>Configuraciones</title>
</head>
<body>

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

        <div class="container">
        	<div class="pt-5">
        		<div class="mt-5">
        			<div class="mb-5">
        				<div class="row">
        					<div class="col-12 col-lg-1"></div>
        					<div class="col-12 col-lg-10">
        						<div class="m-4">
        							<div class="card">
        								<h5 class="card-header">Cambiar contrase??a</h5>
        								<div class="card-body">
        									<form id="form-pass">
        										<div class="card-title">
        											<div class="text-center">
        												<h4><?php 
                                                            echo $_SESSION["usuario"];
                                                        ?></h4>
        											</div>
        										</div>
        										<div class="row">
        											<div class="col-12 col-lg-4">
        												<img src="img/msg.png" class="card-img w-75 p-3">
        											</div>
        											<div class="col-12 col-lg-8">
                                                        <div class="mt-4">
                                                            <input type="hidden" name="ID" id="ID" value=" <?php echo $_SESSION["ID"]; ?>">
                                                        </div>
                                                        <div class="card-body">
                                                            <h6>
                                                                Complete el campo para actualizar su contrase??a
                                                            </h6>
                                                        </div>
        												<div class="mt-4">
        													<input type="password" name="passnew" placeholder="Nueva contrase??a" class="form-control" id="passnew">
        												</div>
        												<div class="mt-4">
        													<div class="text-center">
        														<input type="submit" id="btn-chpass" value="Cambiar contrase??a" class="btn btn-outline-success">
        													</div>
        												</div>
        											</div>
        										</div>
        										<div class="alert alert-success d-none mt-4" role="alert" id="alert-config-1">
                                                    Su contrase??a ha sido cambiada satisfactoriamente
                                                </div>
                                                <div class="alert alert-danger d-none mt-4" role="alert" id="alert-config-2">
                                                    Error en la conexion o en el envio de datos
                                                </div>
                                                <div class="alert alert-warning d-none mt-4" role="alert" id="alert-config-3">
                                                    Complete los campos vacios
                                                </div>
        									</form>
        								</div>
        							</div>
        						</div>
        					</div>
        					<div class="col-12 col-lg-1"></div>
        				</div>
                        
                        <div class="row">
                            <div class="col-12 col-lg-1"></div>
                            <div class="col-12 col-lg-10">
                                <div class="m-4">
                                    <div class="card">
                                        <h5 class="card-header">Informaci??n</h5>
                                        <div class="card-body">
                                            <h5 class="text-center">Sistema desarrollado para el uso exclusivo de la universidad</h5>

                                            <div class="row">
                                                <div class="col-12 col-lg-12">
                                                    <img src="img/logosofi.jpg" class="card-img w-100">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-4">
                                                    <img src="img/logoupam.png" class="card-img w-75">
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <img src="img/logoupam2.png" class="card-img w-75 p-3">
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <img src="img/fondoupam.jpg" class="card-img w-75 p-3">
                                                </div>
                                            </div>
                                            <h5 class="text-center mt-4">Todo los dereschos reservados. Copyright ?? 2021</h5>
                                            <div class="fs-6 text-center">Estancia I</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-1"></div>
                        </div>
        			</div>
        		</div>
        	</div>
        </div>






	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php
}else{
	header("location:index.php");
}
?>