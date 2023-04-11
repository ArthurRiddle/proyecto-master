
<?php
include('session.php');
include ("config.php");
?>

<?php
  $nota=$_POST['nota'];
  // echo"<b>"."enviado: "."</b>".($enviado)."<br>";
  
  

  $datos = "INSERT INTO cuenta(notas) 
  VALUES ('$nota')";
    $sql = mysqli_query($conexion,$datos);

if ($sql == 1) {
    echo '<script language="javascript">';
    echo 'alert("Regsitro Exitoso");';
    echo 'window.location="notas.php";';
    echo '</script>';  
    
}else{
  echo '<script language="javascript">';
  echo 'alert("Regsitro NO exitoso");';
  echo 'window.location="notas.php";';
  echo '</script>';
  
}

?>
