<?php
require_once 'models/fiusu.php';
require_once 'models/ficha.php';
require_once 'models/usuario.php';

class FiusuController {

	private $fiusu;
	private $ficha;
	private $usuario;

	public function __Construct() {
		$this->fiusu = new Fiusu(); // Instancia de la Clase del Modelo Usuario
		$this->ficha = new Ficha();
		$this->usuario = new Usuario();

	}

	public function IndexSelect() {
		require_once 'views/fiusu/fiusuSelect.php';
	}

	public function Index() {
		require_once 'views/fiusu/index.php';
	}

	public function Eliminar() {
		$this->fiusu->Delete($_REQUEST['id']);
		require_once 'views/fiusu/fiusuSelect.php';
	}

	public function Insertar() {

		$datos = $this->fiusu;



		$datos->fiusu_fic = $_REQUEST['fiusu_fic'];
		$datos->fiusu_usu = $_REQUEST['fiusu_usu'];

		$this->fiusu->Insert($datos);

		require_once 'views/fiusu/fiusuSelect.php';
	}
	public function Actualizar() {

		$datos = $this->fiusu;

		$datos->fiusu_fic = $_REQUEST['fiusu_fic'];
		$datos->fiusu_usu = $_REQUEST['fiusu_usu'];
		$datos->id = $_REQUEST['id'];
		$this->fiusu->Update($datos);

		require_once 'views/fiusu/fiusuSelect.php';
	}

}
?>