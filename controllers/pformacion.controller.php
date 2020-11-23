<?php
require_once 'models/pformacion.php';

class PformacionController {

	private $pformacion;

	public function __Construct() {
		$this->pformacion = new Pformacion(); // Instancia de la Clase del Modelo Usuario
	}

	public function IndexSelect() {
		require_once 'views/pformacion/pformacionSelect.php';
	}

	public function Index() {
		require_once 'views/pformacion/index.php';
	}

	public function Eliminar() {
		$this->pformacion->Delete($_REQUEST['id']);
		require_once 'views/pformacion/pformacionSelect.php';
	}

	public function Insertar() {

		$datos = $this->pformacion;

		$datos->name = $_REQUEST['nombre'];

		$this->pformacion->Insert($datos);

		require_once 'views/pformacion/pformacionSelect.php';
	}
	public function Actualizar() {

		$datos = $this->pformacion;

		$datos->name = $_REQUEST['nombre'];
		$datos->id = $_REQUEST['id'];
		$this->pformacion->Update($datos);

		require_once 'views/pformacion/pformacionSelect.php';
	}

}
?>