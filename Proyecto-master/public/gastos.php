<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Registro de Gastos</title>
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<!-- bootstrap -->
<link rel="icon" href="img/logo.png">
<link rel="stylesheet" type="text/css" href="css/boton.css">
    <link rel="stylesheet" type="text/css" href="css/stylepedidos.css">
    <link rel="stylesheet" type="text/css" href="css/estilostabla.css">
</head>
<body>
<header>
                <nav class="navbar navbar-expand-md">
					<div class="container-fluid"> 
						<a class="navbar-brand" href="#">
						<i class="bi bi-droplet"></i>
						<span class="text-primary">H2Oliver</span>
						</a>
						<!-- boton -->
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ele" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<!-- que hay en el menu -->
						<div class="collapse navbar-collapse" id="ele">
							<ul class="navbar-nav me-auto">
								<li class="nav-item">
									<a class="nav-link" href="cuenta.php">Registrar Corte</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="notas.php">Registrar Nota</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="servicios.php">Buscar</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="logout.php">Cerrar Sesión</a>
								</li>
							</ul>
						</div>
					 </div>
				</nav>
</header>
            <div class="row text-center">
				<h2 class="text-justify">Registrar Gastos</h2>	
			</div>
   <br><!-- <hr> -->

   <form action="validategastos.php " method="post" accept-charset="utf-8"> 
<center><B>Gasto: </B>
<input type="text" name="Gasto" required>
<B>Monto: </B>
<input  type="number" name="Monto" min="0" max="1000" required>
  <br><br>
<button type="submit"  name="registrar" value="Registrar">
    Registrar
    <div class="arrow-wrapper">
        <div class="arrow"></div>
    </div>
</button></center>
</form>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>