<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("config.php");
$idempleado=$_POST['idempleado'];
$sql="select * from empleados where idempleado=$idempleado";
$execonsulta=$mysqli->query($sql);
while ($row=mysqli_fetch_array($execonsulta)) {
	?>
	<form action="modificardb.php" method="post">
		<input type="hidden" name="idempleado" value="<?php echo $idempleado;?>"></input>
		<input type="text" name="nombres" value="<?php echo $row['nombres'];?>"></input>
		<input type="text" name="apellidos" value="<?php echo $row['apellidos'];?>"></input>
		<input type="text" name="edad" value="<?php echo $row['edad'];?>"></input>
		<button type="submit">Modificar</button>
	</form>
	<?php
	}
?>
<a href="lista.php">Volver atrás</a>
</body>
</html>