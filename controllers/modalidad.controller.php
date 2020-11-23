<?php

require_once 'models/modalidad.php';
class ModalidadController {

	private $modalidad;
	public function __construct() {
		$this->modalidad = new Modalidad();
	}

	public function IndexSelect() {
		require_once 'views/modalidad/modalidadSelect.php';
	}

	public function Index() {
		require_once 'views/modalidad/index.php';
	}

	public function Eliminar() {
		$this->modalidad->Delete($_REQUEST['id']);
		require_once 'views/modalidad/modalidadSelect.php';
	}

	public function Insertar() {

		$datos = $this->modalidad;
		$datos->name = $_REQUEST['nombre'];
		$this->modalidad->Insert($datos);
		require_once 'views/modalidad/modalidadSelect.php';
	}

	public function Actualizar() {
		$datos = $this->modalidad;
		$datos->id = $_REQUEST['id'];
		$datos->name = $_REQUEST['nombre'];
		$this->modalidad->Update($datos);
		require_once 'views/modalidad/modalidadSelect.php';
	}

}

?>