<?php
include('db.php');

// Obtener el valor seleccionado del radio button
if (isset($_POST['txtPago'])) {
    $PAGO = $_POST['txtPago'];
} else {
    $PAGO = "NULL"; // Si no se selecciona ninguna opción, asigna un valor vacío
}

$ID=$_POST['txtIdAlumno'];
$NOMBRE=$_POST['txtNombre'];
$APELLIDO=$_POST['txtApellido'];
$DIRECCION=$_POST['txtDireccion'];
$TELEFONO=$_POST['txtTelefono'];
$EMAIL=$_POST['txtEmail'];
$DOCUMENTO=$_POST['txtDocumento'];
$FECHA=$_POST['txtNacimiento'];
$CURSO=$_POST['txtCurso'];
$DIASSELECCIONADOS=$_POST['dias'];
$HORARIO=$_POST['txtHorario'];
$CONTRATO=$_POST['txtContrato'];
$ATENDIO=$_POST['txtAtendio'];
$INSCRIPCION=$_POST['txtInscripcion'];

// Convertir los valores en una cadena separada por comas
$DIASSELECCIONADOS = implode(',', $DIASSELECCIONADOS);

mysqli_query($conexion, "UPDATE `alumnx` SET `Nombre` = '$NOMBRE', `Apellido` = '$APELLIDO', `Direccion` = '$DIRECCION', 
`Telefono` = '$TELEFONO', `Email` = '$EMAIL', `Documento` = '$DOCUMENTO', `Nacimiento` = '$FECHA',
`Curso` = '$CURSO', `Dias` = '$DIASSELECCIONADOS', `Horario` = '$HORARIO', `Pago` = '$PAGO', `Contrato` = '$CONTRATO', `Atendio` = '$ATENDIO',
`Inscripcion` = '$INSCRIPCION' WHERE `alumnx`.`IdAlumno` = '$ID'") or die ("Error al actualizar");

mysqli_close($conexion);
header("location:mostrar.php");
?>
