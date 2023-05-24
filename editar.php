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
    <link rel="stylesheet" href="Estilos1.css">



    <title>Editar</title>
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

  </thead>
  <tbody>

  <?php

    $id= $_GET["id"];
    $sql="SELECT * FROM alumnx WHERE IdAlumno='$id'";
    $result = mysqli_query($conexion, $sql);

    while($mostrar = mysqli_fetch_array($result)) {

?>
    
    <form action="procesar_editar.php" method="POST">
            <div class="a">
                <h1>FORMULARIO DE INSCRIPCION</h1>
              </div>
            
            <fieldset>
                <h2 class="b">DATOS PERSONALES</h2>
            </fieldset>
            <div class="datosp">


                <input type="hidden" value="<?php echo $mostrar['IdAlumno']?>" name="txtIdAlumno">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" value="<?php echo $mostrar['Nombre']?>" name="txtNombre">
                </div>

                <div class="campo">
                    <label for="ap">Apellido</label>
                    <input id="ap" type="text" value="<?php echo $mostrar['Apellido']?>" name="txtApellido">
                </div>

                <div class="campo">
                    <label for="dir">Direccion</label>
                    <input id="dir" type="text" value="<?php echo $mostrar['Direccion']?>" name="txtDireccion">
                </div>

                <div class="campo">
                    <label for="tel">Télefono</label>
                    <input id="tel" type="text" value="<?php echo $mostrar['Telefono']?>" pattern="[0-9]{10}" name="txtTelefono">
                </div>

                <div class="campo">
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" value="<?php echo $mostrar['Email']?>" name="txtEmail">
                </div>

                <div class="campo">
                    <label for="doc">Documento</label>
                    <input id="doc" type="text" value="<?php echo $mostrar['Nombre']?>" name="txtDocumento">
                </div>

                <div class="campo">
                    <label for="dt">Fecha de nacimiento</label>
                    <input id="dt" type="date" value="<?php echo $mostrar['Nacimiento']?>" name="txtNacimiento">
                </div>
            </div>

            <fieldset>
                <h2 class="c">CAPACITACION</h2>
            </fieldset>
            <div class="cap">
                <div class="curso">
                    <label for="curso">Curso</label>
                    <select  id="curso" value="<?php echo $mostrar['Curso']?>" name="txtCurso">
                    <option <?php if ($mostrar['Curso'] == 'Curso 1') echo 'selected'; ?>>Curso 1</option>
                    <option <?php if ($mostrar['Curso'] == 'Curso 2') echo 'selected'; ?>>Curso 2</option>
                    <option <?php if ($mostrar['Curso'] == 'Curso 3') echo 'selected'; ?>>Curso 3</option>
                    </select>
                    </select>
                </div>

                <div class="dia">
                    <label>Días</label>
                    <div class="check">
                        <div class="campo-check">
                        <input type="checkbox" id="day1" name="dias[]" value="Lunes" <?php if (in_array('Lunes', explode(',', $mostrar['Dias']))) echo 'checked'; ?>>
                             <label for="day1">Lunes</label>
                        </div>
                        <div class="campo-check">
                        <input type="checkbox" id="day2" name="dias[]" value="Martes" <?php if (in_array('Martes', explode(',', $mostrar['Dias']))) echo 'checked'; ?>>
                             <label for="day2">Martes</label>
                        </div>
                        <div class="campo-check">
                        <input type="checkbox" id="day3" name="dias[]" value="Miércoles" <?php if (in_array('Miércoles', explode(',', $mostrar['Dias']))) echo 'checked'; ?>>
                             <label for="day3">Miércoles</label>
                        </div>
                        <div class="campo-check">
                        <input type="checkbox" id="day4" name="dias[]" value="Jueves" <?php if (in_array('Jueves', explode(',', $mostrar['Dias']))) echo 'checked'; ?>>
                             <label for="day4">Jueves</label>
                        </div>
                    </div>
                </div>

                <div class="h">
                    <label for="h">Horario</label>
                    <select  id="h" value="<?php echo $mostrar['Horario']?>" name="txtHorario">
                    <option <?php if ($mostrar['Horario'] == 'Horario 1') echo 'selected'; ?>>Horario 1</option>
                    <option <?php if ($mostrar['Horario'] == 'Horario 2') echo 'selected'; ?>>Horario 2</option>
                    <option <?php if ($mostrar['Horario'] == 'Horario 3') echo 'selected'; ?>>Horario 3</option>
                    </select>
                </div>
                
                
            </div>

            <fieldset> 
                    <h2 class="c">PLAN DE PAGO</h2> 
            </fieldset>

            <div class="pago">
            <input type="radio" id="contado" name="txtPago" value="Contado" <?php if ($mostrar['Pago'] == 'Contado') echo 'checked'; ?>>
                <label for="contado">Contado</label>

                <input type="radio" id="credito" name="txtPago" value="Crédito" <?php if ($mostrar['Pago'] == 'Crédito') echo 'checked'; ?>>
                <label for="credito">Crédito</label>

                <input type="radio" id="moneda" name="txtPago" value="Moneda" <?php if ($mostrar['Pago'] == 'Moneda') echo 'checked'; ?>>
                <label for="moneda">Moneda</label>

                <input type="radio" id="tarjeta" name="txtPago" value="Tarjeta" <?php if ($mostrar['Pago'] == 'Tarjeta') echo 'checked'; ?>>
                <label for="tarjeta">Tarjeta</label>
            </div>

            <fieldset>
                <h2 class="c">DATOS DE LA INSTITUCION</h2>
            </fieldset>
            <div class="datosi">
                <div class="campo">
                    <label for="numero">No. de contrato</label>
                    <input id="numero" type="text" value="<?php echo $mostrar['Contrato']?>" pattern="^[0-9]+$" name="txtContrato">
                </div>

                <div class="campo">
                    <label for="persona">Persona que atendió</label>
                    <input id="persona" type="text" value="<?php echo $mostrar['Atendio']?>" name="txtAtendio">
                </div>

                <div class="campo">
                    <label for="date-inscripcion">Fecha de inscripción</label>
                    <input id="date-inscripcion" type="date" value="<?php echo $mostrar['Inscripcion']?>" name="txtInscripcion" required>
                </div>
            </div>

    <?php
}
?>
    <input class="btn btn-success" type="submit" value ="Actualizar">
    </div>
   </form>

  </tbody>
</table>
</div>






</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>