<?php
include('session.php');
include ("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Realizar Corte</title>
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/stylecorte.css">
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
									<a class="nav-link" href="gastos.php">Registrar Gasto</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="notas.php">Registrar nota</a>
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
				<h2 class="text-justify">CORTES DE CAJA</h2>	
			</div>
   <br><!-- <hr> -->
   <form action="validateinicio.php " method="post" accept-charset="utf-8"> 
<center><B>Inicio: </B>
<input type="text" name="inicio" >
<div class="space"></div><div class="space"></div>
<B>Final: </B>
<input  type="text" name="final">
  <br><br>
<button type="submit"  name="registrar" value="Registrar">
    Ingresar
    <div class="arrow-wrapper">
        <div class="arrow"></div>
    </div>
</button></center>
</form>
 <div class="table-responsive">
            <center><table class="content-table">
                                    <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Inicio</th>
                                        <th>Final</th>
                                        <th>Notas</th>
                                        <th>Gatos</th>
                                        <th>Monto</th>
                                        <th>Pago_E</th>
                                        <th>Pagado_R</th>
                                        <th>Sellos</th>
                                        <th>G/G_V</th>
                                        <th>G/CH_V</th>
                                        <th>G/G_D</th>
                                        <th>G/CH_D</th>
                                        <th>Total</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                    </tr>
                                </thead>

                <?php
            $sql="SELECT * from cuenta";
            $result=mysqli_query($mysqli,$sql);

            while($mostrar=mysqli_fetch_array($result)){    
            ?>
            <tr>
                <div class="table__item"><td><?php echo $mostrar['fecha']?></td></div>
                <div class="table__item"><td><?php echo $mostrar['litros_i']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['litros_f']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['notas']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['tipogasto']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['montogastos']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['pago_e']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['pago_r']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['sellos_vendidos']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['garrafones_g_v']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['garrafones_ch_v']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['garrafones_g_d']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['garrafones_ch_d']?></td></div>
                <div class="table__item"><td><center><?php echo $mostrar['total']?></td></div>
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
        </div>
        <center>  
        <button type="submit"  name="registrar" value="Registrar">
    Confirmar Corte
    <div class="arrow-wrapper">
        <div class="arrow"></div>
    </div>
</button></center>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>