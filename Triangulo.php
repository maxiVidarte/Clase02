<?php   require_once 'Aplicacion.php';

class Triangulo extends FiguraGeometrica
{

	function __construct()
	{
		parent::__construct();
	}

	function Dibujar()
	{


	}
	function CalcularDatos()
	{


	}


}
	
$prueba = new Triangulo();

echo $prueba->toString();
?>