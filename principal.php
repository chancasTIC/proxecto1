<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Páxina Principal de probas</title>
</head>
<body>
<?php
/**
 * Alberga o punto de entrada na aplicación
 *
 * Presentarase un menú horizontal con deseño responsivo dende o cal os distintos
 * usuarios poderán acceder á distintas opcións da aplicación
 *
 * @package	Proxecto1
 * @license	https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
 * @author	Julio Mosquera González <julio.mosquera@edu.xunta.es>
 * @version	Version 0.5.4
 */

	require_once ("figura.php");
	require_once ("utilidades.php");
	
	$fig = new Rectangulo(5,4);
	echo $fig->area(). "<br/>";
	$fig2 = new Circulo(10);
	echo $fig2->area()."<br/>";
	
	echo seriefibonacci();
	
?>
</body>
<html>