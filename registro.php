<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

// Obtener el valor seleccionado del radio button
if (isset($_POST['pago'])) {
    $pago = $_POST['pago'];
} else {
    $pago = "NULL"; // Si no se selecciona ninguna opción, asigna un valor vacío
}


$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$direccion=$_POST['txtDireccion'];
$telefono=$_POST['txtTelefono'];
$email=$_POST['txtEmail'];
$documento=$_POST['txtDocumento'];
$fecha=$_POST['txtFecha'];
$curso=$_POST['txtCurso'];
$diasSeleccionados=$_POST['dias'];
$horario=$_POST['txtHorario'];
$contrato=$_POST['txtContrato'];
$atendio=$_POST['txtAtendio'];
$inscripcion=$_POST['txtInscripcion'];

// Convertir los valores en una cadena separada por comas
$diasSeleccionados = implode(',', $diasSeleccionados);


$consulta = "INSERT INTO `alumnx` (`Nombre`, `Apellido`, `Direccion`, `Telefono`, `Email`, `Documento`, `Nacimiento`, `Curso`, `Dias`, `Horario`,
`Pago`, `Contrato`, `Atendio`, `Inscripcion`)
 VALUES ('$nombre', '$apellido', '$direccion', '$telefono', '$email', '$documento', '$fecha', '$curso', '$diasSeleccionados',
'$horario', '$pago', '$contrato', '$atendio', '$inscripcion')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

mysqli_close($conexion);
header("location:mostrar.php");

?>