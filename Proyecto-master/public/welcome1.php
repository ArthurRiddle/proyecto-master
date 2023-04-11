<?php
include('session.php');
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	
	<title>Administracion</title>
	<!-- custom CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style.css">
				<nav class="navbar navbar-expand-md">
					<div class="container-fluid"> 
						<a class="navbar-brand" href="#">
						<i class="bi bi-droplet"></i>
						<span class="text-primary">H2Oliver</span>
						</a>
						<!-- boton -->
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#opc" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<!-- que hay en el menu -->
						<div class="collapse navbar-collapse" id="opc">
							<ul class="navbar-nav me-auto">
								<li class="nav-item">
									<a class="nav-link active" href="logout.php">Cerrar Sesion</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="cortescaja.php">Cortes de caja</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="inventario.php">Inventario</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="usuarios.php">Usuarios</a>
								</li>
							</ul>
						</div>
					 </div>
				</nav>
	<div class="container my-3">
			<div class="row text-center">
				<h2 class="text-justify">Administracion</h2>
				
			</div>
	

			
			<div class="row text-center">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card shadow">
							<div class="card-body">
								<center>
								<h3 class="card-title">Bienvenid@  <span>  <?php echo $_SESSION['usuario'] ?></span> </h3>
								<center>
							</div>
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<center>
						<img src="img/logo.png" class="img-fluid" alt="image">
							</center>
						</div>
					</div>
			</div>		
	
		<!-- bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
	</html>