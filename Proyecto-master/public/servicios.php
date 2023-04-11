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
 <link rel="stylesheet" type="text/css" href="css/boton.css">
    <link rel="stylesheet" type="text/css" href="css/estilostabla.css">
    <link rel="stylesheet" type="text/css" href="css/stylepedidos.css">
   <title>Servicios</title>
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
							</ul>
						</div>
					 </div>
				</nav>
</header>
                    <br>
  
<center>
    <form> 
    <label><b>Direccion:</b></label>
   <input type="text" name="direccion" value="<?php if(($_GET['direccion']))
{ echo $_GET['direccion']; } ?>" >

<label><b> Desde el dia:</b></label>
<input type="date" name="from_date" value="<?php if(($_GET['from_date']))
{ echo $_GET['from_date']; } ?>" >

    <div class="space"></div><div class="space"></div>

    <label><b> Hasta el Dia:</b></label>
<input type="date" name="to_date" value="<?php if(($_GET['to_date']))
{ echo $_GET['to_date']; } ?>" >
    <br><br> 
    <button type="submit"  name="Buscar" value="Buscar">
      Buscar
    <div class="arrow-wrapper">
        <div class="arrow"></div>
    </div>
    </button></center>
    </form>
<div class="table-responsive">
 <center><table class="content-table">
                    <thead>
                          <tr>
                            <th>Fecha y hora</th>
                            <th>Direccion</th>
                            <th>Cantidad G/G</th>
                            <th>Cantidad G/Ch</th>
                            <th>Entregado</th>
                            <th>Pagado</th>
                        </tr>
                    </thead>        </center>
 <?php 
                       include ("config.php");

                                if(($_GET['from_date']) && ($_GET['to_date']) 
                                && ($_GET['direccion']))
                                {
                                    $direccion = $_GET['direccion'];
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                    $query = "SELECT fecha_hora, direccion, cantidadg, cantidadch, entregado, pagado FROM servicios
                                     WHERE fecha_hora BETWEEN '$from_date' AND '$to_date' OR direccion like '%$direccion%' ";
                                    $query_run = mysqli_query($conexion, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $fila)
                                        {
                                            ?>
                                            <tr>
                                            <td><?php echo $fila['fecha_hora']; ?></td>
                                            <td><?php echo $fila['direccion']; ?></td>
                                            <td><?php echo $fila['cantidadg']; ?></td>
                                            <td><?php echo $fila['cantidadch']; ?></td>
                                            <td><?php echo $fila['entregado']; ?></td>
                                            <td><?php echo $fila['pagado']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                      
                                         <tr>
                                         <td><?php  echo "No se encontraron resultados"; ?></td>
                                  <?php
                                    }
                                }
                            ?>
     </table></center>
     </div>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 </body>
 </html>


 


