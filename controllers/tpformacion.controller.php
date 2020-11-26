<?php
require_once 'models/tpformacion.php';

class TpformacionController {

	private $tpformacion;

	public function __Construct() {
		$this->tpformacion = new Tpformacion(); // Instancia de la Clase del Modelo Usuario
	}

	public function IndexSelect() {
		require_once 'views/tpformacion/tpformacionSelect.php';
	}

	public function Index() {
		require_once 'views/tpformacion/index.php';
	}

	public function Eliminar() {
		$this->tpformacion->Delete($_REQUEST['id']);
		require_once 'views/tpformacion/tpformacionSelect.php';
	}

	public function Insertar() {

		$datos = $this->tpformacion;

		$datos->name = $_REQUEST['nombre'];

		$this->tpformacion->Insert($datos);

		require_once 'views/tpformacion/tpformacionSelect.php';
	}
	public function Actualizar() {

		$datos = $this->tpformacion;

		$datos->name = $_REQUEST['nombre'];
		$datos->id = $_REQUEST['id'];
		$this->tpformacion->Update($datos);

		require_once 'views/tpformacion/tpformacionSelect.php';
	}

}
?>