<?php
//<!-- Mauricio Tadeo Martínez Blanco / ES1822033954 / DS-DPW1-2102-B2-002 -->

//se coloca la opción y el modo de recolección de datos GET que mostrará los datos que se recauda
//Igual existe POST para enviar los datos de forma anónima
$nombre = $_POST['empleado'];
$apellido = $_POST['nombre'];
$edad = $_POST['edad'];
$estado_civil = $_POST['estado_civil'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$area = $_POST['area'];
$puesto = $_POST['puesto'];


//echo es para imprimir, nota no puedo imprimir el correo ni la fecha de nacimiento, no encontre información relacionada de como llecarlo a cabo, favor de apoyarme en darme info de como realizarlo

echo "<h2>Información recibida desde PHP</h2>";
echo "El ID de empleado recibido es: ".$empleado. "<br/>";
echo "El nombre recibido es: ".$nombre. "<br/>";
echo "El apellidos recibido es: ".$apellidos. "<br/>";
echo "El teléfono es: ".$telefono. "<br/>";
echo "El password es: ".$pass. "<br/>";
echo "El area de trabajo es: ".$area. "<br/>";
echo "El puesto es: ".$puesto. "<br/>";



?>