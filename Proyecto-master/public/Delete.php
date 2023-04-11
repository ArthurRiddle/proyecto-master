<?php
include('session.php');
include ("config.php");

// Verifica si se ha enviado el formulario para borrar los datos
if (isset($_POST['borrar'])) {
  // Sentencia SQL para borrar todos los registros de la tabla

  $sql = "DELETE FROM servicio";
  
  // Ejecuta la sentencia SQL
  if (mysqli_query($conexion, $sql)) {
    
  $mysqli_query = "ATER TABLE servicio AUTO_INCREMENT=1";
  $sql = mysqli_query($conexion,$sqltabla1);
    echo '<script language="javascript">';
    echo 'alert("Se han borrado todos los registros de la tabla");';
    echo 'window.location="welcome2.php";';
    echo '</script>';  
    
  } else {
    echo "Error al borrar los registros: " . mysqli_error($conexion);
  }
}

// Cierra la conexión
mysqli_close($conexion);
?>
