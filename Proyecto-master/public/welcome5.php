<?php
include('session.php');
include ("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- bootstrap -->
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/estilostabla.css">
    <title>Registro de Servicios</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- <h1><span>Responsive Navigation Menu</span> Using Only CSS</h1> -->

<header>
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
									<a class="nav-link" href="cuenta.php">Realizar Corte</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="gastos.php">Registrar Gasto</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="notas.php">Registrar Nota</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link" href="servicios.php">Buscar</a>
								</li>
							</ul>
						</div>
					 </div>
				</nav>
</header>
<div class="row text-center">
				<h2 class="text-justify">Purificadora Los Reyes</h2>
				
			</div>
	

			
			<div class="row text-center">
					<h3 class="card-title">Bienvenid@  <span>  <?php echo $_SESSION['usuario'] ?></span> </h3>
				</div>
            </div><!-- <hr> -->
<?php

date_default_timezone_set('America/Mexico_City');
$fecha=date("Y-m-d H:i:s");


?>
<br>
   <form action="validatedia.php " method="post" accept-charset="utf-8"> 

<!--  <B>Fecha y Hora: </B><input type="datetime" name="fecha" 
 placeholder="<?= $fecha?>"> -->
<center><B>Direccion:</B>
<input type="text" name="direccion" required>
<B>Cantidad G:</B>
<input class="campo" type="number" name="cantidadg" min="0" max="30" required>
<B>Cantidad CH:</B>
<input class="campo" type="number" name="cantidadch" min="0" max="30" required>
<B>Pagado:</B>
  <input type="radio"  name="pagado"  value="SI" required>
  <label >Si</label>
  <input type="radio"  name="pagado"  value="NO" required>
  <label >No</label>
  <div class="space"></div><div class="space"></div>
  <B>Enviado:</B>
  <input type="radio"  name="enviado"  value="SI" required>
  <label >Si</label>
  <input type="radio"  name="enviado"  value="NO" required>
  <label >No</label>
  <br><br>
<button type="submit"  name="registrar" value="Registrar">
    Registrar
    <div class="arrow-wrapper">
        <div class="arrow"></div>
    </div>
</button></center>
</form>
<center><table class="content-table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Fecha y Hora</th>
                            <th>Direccion</th>
                            <th>Cantidad G/G</th>
                            <th>Cantidad G/Ch</th>
                            <th>Entregado</th>
                            <th>Pagado</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>

    <?php
$sql="SELECT * from servicio";
$result=mysqli_query($mysqli,$sql);

while($mostrar=mysqli_fetch_array($result)){    
?>
<tr>
    <div class="table__item"><td><?php echo $mostrar['id']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['fecha_hora']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['direccion']?></td></div>
    <div class="table__item"><td><center><?php echo $mostrar['cantidadg']?></td></div>
    <div class="table__item"><td><center><?php echo $mostrar['cantidadch']?></td></div>
    <div class="table__item"><td><center><?php echo $mostrar['entregado']?></td></div>
    <div class="table__item"><td><center><?php echo $mostrar['pagado']?></td></div>
    <td>
<a href="editarregistro.php?id=<?php echo $mostrar['id'];?>" class="table__item">
<img src="../img/editar.png" style="width:35px;height:35px;" alt="Icono para Editar"></a>
</td>
<td>
<a href="eliminaruser.php?id=<?php echo $mostrar['id'];?>" class="table__item">
<img src="../img/borrar.png" style="width:35px;height:35px;" alt="Icono de Borrar"></a>
</td>

</tr>
<?php
}
?>
 </table>
        </center>     
        <center>    
<form action="Delete.php" method="post">
<button type="submit"  name="borrar" value="borrar">
    Reiniciar
    <div class="arrow-wrapper">
        <div class="arrow"></div>
    </div>
</button>
  </form>
  </center> 
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
  <div class="row align-items-center">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<center>
						<img src="img/logo.png" class="img-fluid" alt="image">
							</center>
						</div>
					</div>
</body>
</html>
