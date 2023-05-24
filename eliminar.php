<?php

include('db.php');

$ID = $_POST['txtIdAlumno'];
mysqli_query($conexion, "DELETE FROM alumnx WHERE IdAlumno='$ID'") or die ("error al eliminar");

mysqli_close($conexion);
header("location:mostrar.php");

?> 