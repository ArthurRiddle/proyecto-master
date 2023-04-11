
<?php
include('session.php');
include ("config.php");
?>

<?php
  $inicio=$_POST['inicio'];
  // echo"<b>"."enviado: "."</b>".($enviado)."<br>";
  $final=$_POST['final'];
  

  $datos = "INSERT INTO cuenta(litros_i,litros_f) 
  VALUES ('$inicio','$final')";
    $sql = mysqli_query($conexion,$datos);

if ($sql == 1) {
    echo '<script language="javascript">';
    echo 'alert("Regsitro Exitoso");';
    echo 'window.location="cuenta.php";';
    echo '</script>';  
    
}else{
  echo '<script language="javascript">';
  echo 'alert("Regsitro NO exitoso");';
  echo 'window.location="cuenta.php";';
  echo '</script>';
  
}

?>
