<?php
require_once 'models/foro.php';
require_once 'models/usuario.php';
require_once 'models/estado.php';
require_once 'models/ficha.php';

class ForoController {

	private $foro;
	private $usuario;
	private $estado;
	private $ficha;

	public function __Construct() {
		$this->foro = new Foro(); 
		$this->usuario = new Usuario();
		$this->estado = new Estado();
		$this->ficha = new Ficha();
	}

	public function IndexSelect() {
		require_once 'views/foro/foroSelect.php';
	}

	public function Index() {

		require_once 'views/foro/index.php';
	}

	public function Eliminar() {
		$this->foro->Delete($_REQUEST['id']);
		require_once 'views/foro/foroSelect.php';
	}

	public function Insertar() {

		$datos = $this->foro;

		//$datos->name = $_REQUEST['nombre'];
		$datos->for_nom = $_REQUEST['for_nom'];
		$datos->for_cue = $_REQUEST['for_cue'];
		$datos->for_fec = $_REQUEST['for_fec'];
		$datos->for_usu = $_REQUEST['for_usu'];
		$datos->for_est = $_REQUEST['for_est'];
		$datos->for_fic = $_REQUEST['for_fic'];
		$this->foro->Insert($datos);

		require_once 'views/foro/foroSelect.php';
	}
	public function Actualizar() {

		$datos = $this->foro;

		$datos->for_nom = $_REQUEST['for_nom'];
		$datos->for_cue = $_REQUEST['for_cue'];
		$datos->for_fec = $_REQUEST['for_fec'];
		$datos->for_usu = $_REQUEST['for_usu'];
		$datos->for_est = $_REQUEST['for_est'];
		$datos->for_fic = $_REQUEST['for_fic'];
		$datos->id = $_REQUEST['id'];

		$this->foro->Update($datos);

		require_once 'views/foro/foroSelect.php';
	}

}
?>