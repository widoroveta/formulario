<?php 
	$conexion=mysqli_connect('localhost','root','','pruebas');

	$nombre=$_POST['Nombre'];
	$apellido=$_POST['Apellido'];
	$direcion=$_POST['Direccion'];
	$dni=$_POST['DNI'];
	$localidad=$_POST['Localidad'];
	$nacionalidad=$_POST['Nacionalidad'];


	$sql="INSERT into usuarios (nombre,apellido,direccion,DNI,localidad,nacionalidad)
			values ('$nombre','$apellido','$direccion','$dni','$localidad','$nacionalidad')";
	echo mysqli_query($conexion,$sql);
 ?>