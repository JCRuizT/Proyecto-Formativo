<?php

require_once 'models/usuario.php';

class UsuarioController {
	private $usuario;

	function __Construct() {
		$this->usuario = new Usuario(); // Instancia de la Clase del Modelo Usuario
	}

	public function Index() {
		require_once '../views/usuario/usuarioView.php';
	}

	public function Eliminar() {
		$this->usuario->Delete($_REQUEST['id']);
		require_once '../views/usuario/usuarioSelect.php';
	}

	public function Insertar() {

		$datos = $this->usuario;

		$datos->usuario = $_REQUEST['usuario'];
		$datos->nombres = $_REQUEST['nombres'];
		$datos->area = $_REQUEST['area'];
		$datos->clave = $_REQUEST['clave'];
		$datos->estado = $_REQUEST['estado'];

		$this->usuario->Insert($datos);

		require_once '../views/usuario/usuarioSelect.php';
	}

	public function Actualizar() {

		$datos = $this->usuario;

		$datos->id = $_REQUEST['id'];
		$datos->usuario = $_REQUEST['usuario'];
		$datos->nombres = $_REQUEST['nombres'];
		$datos->area = $_REQUEST['area'];
		$datos->clave = $_REQUEST['clave'];
		$datos->estado = $_REQUEST['estado'];

		$this->usuario->Update($datos);

		require_once '../views/usuario/usuarioSelect.php';
	}

}

?>