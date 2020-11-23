<?php
require_once 'models/jornada.php';

class JornadaController {

	private $jornada;

	public function __Construct() {
		$this->jornada = new Jornada(); // Instancia de la Clase del Modelo Usuario
	}

	public function IndexSelect() {
		require_once 'views/jornada/jornadaSelect.php';
	}

	public function Index() {
		require_once 'views/jornada/index.php';
	}

	public function Eliminar() {
		$this->jornada->Delete($_REQUEST['id']);
		require_once 'views/jornada/jornadaSelect.php';
	}

	public function Insertar() {

		$datos = $this->jornada;

		$datos->name = $_REQUEST['nombre'];

		$this->jornada->Insert($datos);

		require_once 'views/jornada/jornadaSelect.php';
	}
	public function Actualizar() {

		$datos = $this->jornada;

		$datos->name = $_REQUEST['nombre'];
		$datos->id = $_REQUEST['id'];
		$this->jornada->Update($datos);

		require_once 'views/jornada/jornadaSelect.php';
	}

}
?>