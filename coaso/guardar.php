<?php

include("conexion.php");

$nombre = $_POST["Nombre"];
$edad = $_POST["Edad"];
$fecha  = $_POST["Fecha"];
$genero = $_POST["Genero"];



//Enviar datos
if(isset($_POST["btnSave"]))
{
	$sqlgrabar = "INSERT INTO datos(Nombre,Edad,Fecha,Genero) values ('$nombre','$edad','$fecha','$genero')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Solicitud enviada, uno de nuestros asesores se comunicara contigo pronto); window.location='index.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
}


?>