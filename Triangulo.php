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
		echo "hola estoy en calcular datos<br>";
		echo "La superficie es: ".$this->_base*$this->_altura/2;

	}


}
	
$prueba = new Triangulo(5,2);
//echo $prueba->Dibujar();
//echo $prueba->toString();
?>