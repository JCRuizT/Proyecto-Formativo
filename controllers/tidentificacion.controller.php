<?php
require_once 'models/tidentificacion.php';

class TidentificacionController {

	private $tidentificacion;

	public function __Construct() {
		$this->tidentificacion = new Tidentificacion(); // Instancia de la Clase del Modelo Usuario
	}

	public function IndexSelect() {
		require_once 'views/tidentificacion/tidentificacionSelect.php';
	}

	public function Index() {
		require_once 'views/tidentificacion/index.php';
	}

	public function Eliminar() {
		$this->tidentificacion->Delete($_REQUEST['id']);
		require_once 'views/tidentificacion/tidentificacionSelect.php';
	}

	public function Insertar() {

		$datos = $this->tidentificacion;

		$datos->name = $_REQUEST['nombre'];

		$this->tidentificacion->Insert($datos);

		require_once 'views/tidentificacion/tidentificacionSelect.php';
	}
	public function Actualizar() {

		$datos = $this->tidentificacion;

		$datos->name = $_REQUEST['nombre'];
		$datos->id = $_REQUEST['id'];
		$this->tidentificacion->Update($datos);

		require_once 'views/tidentificacion/tidentificacionSelect.php';
	}

}
?>