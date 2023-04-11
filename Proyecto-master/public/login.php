<?php
de ("config.php");

$mysqli_query = "SELECT * FROM cuenta";
$resultado = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_array($resultado)) {
    echo $fila['notas'] . " - " . $fila['tipogasto'] . "<br>";
}

mysqli_close($conexion);
?>

--------------------------
<?php

$mysqli_query = "SELECT * FROM cuenta";
$resultado = mysqli_query($conexion, $consulta);

// Recuperar los datos
echo"<b>"."Notas: "."</b>"."<br>";
while ($fila = mysqli_fetch_array($resultado)) {
    echo $resultado['notas'] . "<br>";
   
}
$mysqli_query = "SELECT * FROM cuenta";
$resultado = mysqli_query($conexion, $consulta);
echo"<b>"."Gastos: "."</b>"."<br>";
while ($fila = mysqli_fetch_array($resultado)) {
    echo $resultado['tipogasto'] . "<br>";
   
}
?>