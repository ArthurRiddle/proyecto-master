
<?php
include('session.php');
include ("config.php");
?>

<?php
  $tipogasto=$_POST['Gasto'];
  // echo"<b>"."pagado: "."</b>".($pagado)."<br>";
  $monto=$_POST['Monto'];
  // echo"<b>"."enviado: "."</b>".($enviado)."<br>";
  
  

  $datos = "INSERT INTO cuenta(tipogasto,montogastos) 
  VALUES ('$tipogasto','$monto')";
    $sql = mysqli_query($conexion,$datos);

if ($sql == 1) {
    echo '<script language="javascript">';
    echo 'alert("Regsitro Exitoso");';
    echo 'window.location="gastos.php";';
    echo '</script>';  
    
}else{
  echo '<script language="javascript">';
  echo 'alert("Regsitro NO exitoso");';
  echo 'window.location="gastos.php";';
  echo '</script>';
  
}

?>


