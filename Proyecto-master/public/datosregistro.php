<!DOCTYPE html>
<html>
 <link rel="stylesheet" type="text/css" href="../css/estilosrecibirdatos.css">
<body>
<?php
include("config.php"); 
echo "<center> <p> <b>Datos del usuario: </b></p></center>";
echo "<br>";
$usuario=$_POST['usuario'];
echo"<b>"."usuario: "."</b>".($usuario)."<br>";
echo "<br>";
$contraseña=$_POST['contraseña'];
echo"<b>"."contraseña: "."</b>".($contraseña)."<br>";
echo "<br>";
$cargo=$_POST['cargo'];
echo"<b>"."Id_cargo: "."</b>".($cargo)."<br>";
echo "<br>";


$sql = "INSERT INTO usuarios(usuario,contraseña,id_cargo)
VALUES ('$usuario','$contraseña','$cargo')";

if ($mysqli->query($sql) === TRUE) {
	echo "<br>"."<b>"."(ESTA REGISTRADO PERFECTAMENTE)"."</b>";
}else{
	echo "Error-Registro NO exitoso: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>
<br><br>
<a href="index.php" style="text-decoration:none;"> <input type="button" value="Iniciar Sesion"></a>
</body>
</html>
