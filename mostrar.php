<?php

include('db.php');

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="estilo.css">


    <title>Formulario de inscripción</title>
</head>
<body style="font-family: 'Times New Roman', Times, serif;">
    <div>
    <div class="contenedor-header">
        <header>
            <div class="logo">
            <a href="index.html">FORMULARIO</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="index.html">INICIO</a></li>
                    <li><a href="mostrar.php">LISTADO / ACCIONES</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        </header>

<!--------Mostrar------> 
<div class="espacio-tabla"> 
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col" class="center">IdAlumno</th>
      <th scope="col" class="center">Nombre</th>
      <th scope="col" class="center">Apellido</th>
      <th scope="col" class="center">Direccion</th>
      <th scope="col" class="center">Telefono</th>
      <th scope="col" class="center">Email</th>
      <th scope="col" class="center">Fecha de Nacimiento</th>
      <th scope="col" colspan="2" class="center">Acciones</th>

    </tr>
  </thead>
  <tbody>

  <?php

    $sql="SELECT * FROM alumnx";
    $result = mysqli_query($conexion, $sql);

    while($mostrar = mysqli_fetch_array($result)) {

?>



    <tr>
      <td><?php echo $mostrar['IdAlumno'] ?></td>
      <td><?php echo $mostrar['Nombre'] ?></td>
      <td><?php echo $mostrar['Apellido'] ?></td>
      <td><?php echo $mostrar['Direccion'] ?></td>
      <td><?php echo $mostrar['Telefono'] ?></td>
      <td><?php echo $mostrar['Email'] ?></td>
      <td><?php echo $mostrar['Nacimiento'] ?></td>

      <td>
        <!------Editar------>
        <button class="btn btn-success" onclick="window.location.href='editar.php?id=<?php echo $mostrar['IdAlumno'] ?>'">Editar</button>


                <!------Elimiar------>
            <form action="eliminar.php" method="POST">
                <input type="hidden" value="<?php echo $mostrar['IdAlumno']?>" name="txtIdAlumno" readonly>
                <td><input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar"></td>
            </form>

        </td>

    </tr>
    <?php
}
?>

  </tbody>
</table>
</div>


</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>