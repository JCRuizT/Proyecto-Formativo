<?php
require_once 'models/rol.php';

class RolController {

	private $rol;

	public function __Construct() {
		$this->rol = new Rol(); // Instancia de la Clase del Modelo Usuario
	}

	public function IndexSelect() {
		require_once 'views/rol/rolSelect.php';
	}

	public function Index() {
		require_once 'views/rol/index.php';
	}

	public function Eliminar() {
		$this->rol->Delete($_REQUEST['id']);
		require_once 'views/rol/rolSelect.php';
	}

	public function Insertar() {

		$datos = $this->rol;

		$datos->name = $_REQUEST['nombre'];

		$this->rol->Insert($datos);

		require_once 'views/rol/rolSelect.php';
	}
	public function Actualizar() {

		$datos = $this->rol;

		$datos->name = $_REQUEST['nombre'];
		$datos->id = $_REQUEST['id'];
		$this->rol->Update($datos);

		require_once 'views/rol/rolSelect.php';
	}

}
?>