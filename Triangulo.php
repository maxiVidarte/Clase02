<?php   require_once 'Aplicacion.php';

class Triangulo extends FiguraGeometrica
{
	private $_altura;
	private $_base;

	function __construct($b,$h)
	{
		parent::__construct();
		$this->_altura = $h;
		$this->_base = $b;
		$this->CalcularDatos();
	}

	function Dibujar()
	{
		echo "	*	<br>";
		echo " ***  <br>";
		echo "***** <br>";


	}
	function CalcularDatos()
	{
		echo "hola estoy en calcular datos";

	}


}
	
$prueba = new Triangulo(10.5,20.1);
echo $prueba->Dibujar();
//echo $prueba->toString();
?>