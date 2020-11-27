<?php
require_once 'models/pforo.php';
require_once 'models/foro.php';

class PforoController {

	private $pforo;
	private $foro;
	private $pid;
	public function __Construct() {
		$this->pforo = new Pforo();
		$this->foro = new Foro(); 
		$this->pid = $_REQUEST['pid'];
	}

	public function IndexSelect() {
		require_once 'views/pforo/pforoSelect.php';
	}

	public function Index() {
		$id=$_REQUEST['pid'];
		require_once 'views/pforo/index.php';
	}

	public function Eliminar() {
		$this->pforo->Delete($_REQUEST['id']);
		$this->pid = $_REQUEST['pid'];
		require_once 'views/pforo/pforoSelect.php';
	}

	public function Insertar() {

		$datos = $this->pforo;

		 $datos->pfor_fec = $_REQUEST['pfor_fec'];
		 $datos->pfo_usu = $_REQUEST['pfo_usu'];
		 $datos->pfor_res = $_REQUEST['pfor_res'];
		 $datos->pfor_for = $_REQUEST['pid'];
		$this->pforo->Insert($datos);

		require_once 'views/pforo/pforoSelect.php';
	}
	public function Actualizar() {

		$datos = $this->pforo;

		$datos->for_nom = $_REQUEST['for_nom'];
		$datos->for_cue = $_REQUEST['for_cue'];
		$datos->for_fec = $_REQUEST['for_fec'];
		$datos->for_usu = $_REQUEST['for_usu'];
		$datos->for_est = $_REQUEST['for_est'];
		$datos->for_fic = $_REQUEST['for_fic'];
		$datos->id = $_REQUEST['id'];

		$this->pforo->Update($datos);

		require_once 'views/pforo/pforoSelect.php';
	}

}
?>