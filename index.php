<?php
	
	$conexion=mysqli_connect('localhost','root','','registros');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
</head>
<body>

<br>
	<table border="2">
		<tr>
			<td>Id</td>
			<td>Nombres</td>
			<td>ApellidoP</td>
			<td>ApellidoM</td>
			<td>Calle</td>
			<td>Numero</td>
			<td>Colonia</td>
			<td>Telefono</td>
			<td>Correo</td>
		</tr>

		<?php
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		?> 

		<tr>
			<td><?php echo $mostrar['Id']?></td>
			<td><?php echo $mostrar['Nombres']?></td>
			<td><?php echo $mostrar['ApellidoP']?></td>
			<td><?php echo $mostrar['ApellidoM']?></td>
			<td><?php echo $mostrar['Calle']?></td>
			<td><?php echo $mostrar['Numero']?></td>
			<td><?php echo $mostrar['Colonia']?></td>
			<td><?php echo $mostrar['Telefono']?></td>
			<td><?php echo $mostrar['Correo']?></td>
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>