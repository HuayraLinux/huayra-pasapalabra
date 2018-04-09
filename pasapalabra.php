
<?php 

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$letra = $_POST['letra'];
$respuestaJugador = $_POST['palabraJugador']; 

$respuesta['A'] = "arbol";
$respuesta['B'] = "abaco";
$respuesta['C'] = "cuchillo";
$respuesta['D'] = "codificar";
$respuesta['E'] = "entrar";
$respuesta['F'] = "fuego";
$respuesta['G'] = "golosina";
$respuesta['H'] = "higo";


if ($respuestaJugador == $respuesta[$letra])
		{echo "1";}
	else
		{echo "0";}



// para servir php:   $php -S 0:8000 -r . 


?>
