<?php
session_start();
   
if(!isset($_SESSION['usuario'])){
	header("location:redireccion.php");
	}
?>