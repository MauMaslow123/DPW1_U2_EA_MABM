<?php
//<!-- Mauricio Tadeo Martínez Blanco / ES1822033954 / DS-DPW1-2102-B2-002 -->

//se coloca la opción y el modo de recolección de datos GET que mostrará los datos que se recauda
//Igual existe POST para enviar los datos de forma anónima
$asesor = $_POST['asesor'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$tipo = $_POST['tipo'];
$telefono = $_POST['telefono'];
$pass = $_POST['pass'];


//echo es para imprimir, nota no puedo imprimir el correo ni la fecha de nacimiento, no encontre información relacionada de como llecarlo a cabo, favor de apoyarme en darme info de como realizarlo

echo "<h2>Información recibida desde PHP</h2>";
echo "ID de asesor es: ".$asesor. "<br/>";
echo "El nombre recibido es: ".$nombre. "<br/>";
echo "El apellidos recibido es: ".$apellidos. "<br/>";
echo "El tipo de asesor es: ".$tipo. "<br/>";
echo "El password es: ".$pass. "<br/>";



?>