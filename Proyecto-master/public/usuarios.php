<?php
include('session.php');
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inventario</title>
    <link rel="stylesheet" type="text/css" href="css/estilostabla.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <center><a href="welcome1.php"><img src="img/logo.png"width=145px; height=95px; alt="Logo"></a></center>

            <div class="container-xxl py-5">
                <center><h1>Usuarios</h1>
                    <a href="register.php"><b><p>"Registrar usuario"</p></b></a>
                    </center>
                    <center><table class="content-table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Rol</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                <div class="container">

<tbody>
<?php
$sql="SELECT * from usuarios";
$result=mysqli_query($mysqli,$sql);

while($mostrar=mysqli_fetch_array($result)){    
?>
<tr>
    <div class="table__item"><td><?php echo $mostrar['id']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['usuario']?></td></div>
    <div class="table__item"><td><?php echo $mostrar['id_cargo']?></td></div>

<td><img src="img/editar.png" style="width:35px;height:35px;" alt="Icono para Editar">
</a></td>

<td><a href="eliminaruser.php?id=<?php echo $mostrar['id'];?>" class="table__item">
    <img src="img/borrar.png" style="width:35px;height:35px;" alt="Icono de Borrar"></a></td>

</tr>
<?php
}
?>


                </tbody>
            </table></center>
        </body>
        </html>