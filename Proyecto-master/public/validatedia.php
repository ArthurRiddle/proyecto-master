
 <?php
include('session.php');
include ("config.php");
?>

<?php

  date_default_timezone_set('America/Mexico_City');
  $fecha_actual=date("Y-m-d H:i:s");
  // echo"<b>"."fecha_actual: "."</b>".($fecha_actual)."<br>";
  $direccion=$_POST['direccion'];
  // echo"<b>"."direccion: "."</b>".($direccion)."<br>";
  $cantidadg=$_POST['cantidadg'];
  // echo"<b>"."cantidadg: "."</b>".($cantidadg)."<br>";
  $cantidadch=$_POST['cantidadch'];
  // echo"<b>"."cantidadch: "."</b>".($cantidadch)."<br>";
  $pagado=$_POST['pagado'];
  // echo"<b>"."pagado: "."</b>".($pagado)."<br>";
  $enviado=$_POST['enviado'];
  // echo"<b>"."enviado: "."</b>".($enviado)."<br>";
  

  $sqltabla1 = "INSERT INTO servicios(fecha_hora,direccion,cantidadg,cantidadch,entregado,pagado) 
  VALUES ('$fecha_actual','$direccion','$cantidadg','$cantidadch','$pagado','$enviado')";
    

if ($sql == true) {
  echo '<script language="javascript">';
  echo 'alert("Regsitro Exitoso");';
  echo 'window.location="welcome2.php";';
  echo '</script>';
  header("location:welcome2.php");
    
}else{
  echo '<script language="javascript">';
  echo 'alert("Regsitro NO exitoso");';
  echo 'window.location="welcome2.php";';
  echo '</script>';
  
}

?>


