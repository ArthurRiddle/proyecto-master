<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","h2oliver");

$consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
  $_SESSION['usuario'] = $usuario;
    header("location:welcome1.php");

}else
if($filas['id_cargo']==2){ //cliente
  $_SESSION['usuario'] = $usuario;
header("location:welcome2.php");
}
else
if($filas['id_cargo']==3){ //cliente
  $_SESSION['usuario'] = $usuario;
header("location:welcome3.php");
}
else
if($filas['id_cargo']==4){ //cliente
  $_SESSION['usuario'] = $usuario;
header("location:welcome4.php");
}
else
if($filas['id_cargo']==5){ //cliente
  $_SESSION['usuario'] = $usuario;
header("location:welcome5.php");
}
else{
  echo '<script language="javascript">';
    echo 'alert("USUARIO NO REGISTRADO - VERIFICA QUE TUS DATOS SEAN CORRECTOS");';
    echo 'window.location="index.php";';
    echo '</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
