<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<?php
   include ("config.php");
?>
<a href="agregar.php" target="_self">Agregar Registro</a>

      <table border="1">
         <thead>
            <tr>
               <th>Id</th>
               <th>Nombres</th>
               <th>Apellidos</th>
               <th>Edad</th>
               <th>Modificar</th>
               <th>Eliminar</th>
            </tr>
         </thead>
         <tbody> 
      <?php             
      $sql="SELECT * FROM empleados";
      $execonsulta=$mysqli->query($sql);
      $indice=1;
      while($row=mysqli_fetch_array($execonsulta))
      {
      ?>
      <tr>
         <td><?php echo $indice; ?></td>
         <td><?php echo $row['nombres']; ?></td>
         <td><?php echo $row['apellidos']; ?></td>
         <td><?php echo $row['edad']; ?></td>
         <td>
            <form action="modificar.php" method="post">
               <input type="hidden" name="idempleado" value="<?php echo $row['idempleado']; ?>">
               <button type="submit">Modificar</button>
            </form>
         </td>
         <td>
            <form action="eliminardb.php" method="post">
               <input type="hidden" name="idempleado" value="<?php echo $row['idempleado']; ?>">
               <button type="submit">Eliminar</button>
            </form>
         </td>
      </tr>
      <?php
      $indice++;
      }
      ?>
         </tbody>
      </table>

</body>
</html>