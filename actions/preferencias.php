<?php

$extremo = 0;
$tranquilo = 0;
session_start();

if($_POST['comida'] == 'carnivoro'){
	$extremo = $extremo + 3;
}else{
	$tranquilo = $tranquilo + 3;
}

if($_POST['musica'] == 'fuerte'){
	$extremo = $extremo + 2;
}else{
	$tranquilo = $tranquilo + 2;
}

if($_POST['paisaje'] == 'playa'){
	$extremo = $extremo + 2;
}else{
	$tranquilo = $tranquilo + 3;
}

if($_POST['hospedaje'] == 'bajoTecho'){
	$extremo = $extremo + 1;
}else{
	$tranquilo = $tranquilo + 3;
}

if($_POST['tiempo'] == 'corto'){
	$extremo = $extremo + 3;
}else{
	$tranquilo = $tranquilo + 1;
}

if($_POST['tipoActividad'] == 'extremas'){
	$extremo = $extremo + 5;
}else{
	$tranquilo = $tranquilo + 5;
}

if($extremo >= $tranquilo){
	$_SESSION['estereotipo'] = "extremo";
}else{
	$_SESSION['estereotipo'] = "tranquilo";
}

header ('Location: ../pages/busqueda_estereotipo.php');


?>