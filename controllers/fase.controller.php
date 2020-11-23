<?php
require_once 'models/fase.php';

class FaseController {

	private $fase;

	public function __Construct() {
		$this->fase = new Fase(); // Instancia de la Clase del Modelo Usuario
	}

	public function IndexSelect() {
		require_once 'views/fase/faseSelect.php';
	}

	public function Index() {
		require_once 'views/fase/index.php';
	}

	public function Eliminar() {
		$this->fase->Delete($_REQUEST['id']);
		require_once 'views/fase/faseSelect.php';
	}

	public function Insertar() {

		$datos = $this->fase;

		$datos->name = $_REQUEST['nombre'];

		$this->fase->Insert($datos);

		require_once 'views/fase/faseSelect.php';
	}
	public function Actualizar() {

		$datos = $this->fase;

		$datos->name = $_REQUEST['nombre'];
		$datos->id = $_REQUEST['id'];
		$this->tidentificacion->Update($datos);

		require_once 'views/fase/faseSelect.php';
	}

}
?>