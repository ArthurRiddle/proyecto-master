<?php
include('session.php');
include ("config.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Servicios</title>
    <link rel="stylesheet" type="text/css" href="css/estilostabla.css">
</head>

<body>
    <a href="welcome2.php"><img src="img/logo.png"width=145px; height=95px; alt="Logo"></a>
                <center><h1>Registro de Servicios</h1></center>


<form action="RecibirDatos.php" method="post" enctype="multipart/form-data">        
<br> 
<B>DIRECCION</B>
<INPUT TYPE="Text" name="Nombre" required> <br>
<br> 
<B>ENTREGADO </B> 
<INPUT TYPE="radio"  name="SI"> 
<LABEL >SI</label>
<INPUT TYPE="radio"   name="NO"> 
<LABEL>NO</label>
<br><br>
<B>PAGADO </B>  
<INPUT TYPE="radio" id="SI" name="SI" value="SI"> 
<LABEL for="SI">SI</label>
<INPUT TYPE="radio"  id="NO" name="NO"value="NO" > 
<LABEL for="NO">NO</label>
<br> <br> 
<input type="submit" value="Enviar ">
 <input type="reset" value="Borrar">
 </form> 
                
                    <center><table class="content-table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Hora</th>
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
$sql="SELECT * from servicios";
$result=mysqli_query($mysqli,$sql);

while($mostrar=mysqli_fetch_array($result)){    
?>
<tr>
    <div class="table__item"><td><?php echo $mostrar['id']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['fecha']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['hora']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['direccion']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['cantidadg']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['cantidadch']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['entregado']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['pagado']?></td></div>
<td><img width=80px src="data:image/jpg;base64,<?php echo base64_encode($mostrar['Foto']); ?>"/> </td> 
    <td><a href="editarregistro.php?id=<?php echo $mostrar['id'];?>" class="table__item">
<img src="img/editar.png" style="width:35px;height:35px;" alt="Icono para Editar"></a>
</td>
<td><a href="eliminaruser.php?id=<?php echo $mostrar['id'];?>" class="table__item">
    <img src="img/borrar.png" style="width:35px;height:35px;" alt="Icono de Borrar"></a></td>

</tr>
<?php
}
?>

        </table>
        </center>
        </body>
        </html>

                            <!-- <tbody>
                      <tr>
                        <td>1</td>
                        <td>Sellos</td>
                        <td>10</td>
                        <td>10</td>
                        <td><img src="img/editar.png" style="width:35px;height:35px;" 
                        alt="Icono para Editar"></td>
                        <td><img src="img/borrar.png" style="width:35px;height:35px;" 
                        alt="Icono para Editar"></td>
                    </tr>
                    
                </tbody> -->