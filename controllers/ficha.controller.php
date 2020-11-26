<?php
require_once 'models/ficha.php';
require_once 'models/pformacion.php';
require_once 'models/estado.php';
require_once 'models/jornada.php';
require_once 'models/modalidad.php';
require_once 'models/oferta.php';

class FichaController {

	private $ficha;
	private $pformacion;
	private $estado;
	private $jornada;
	private $modalidad;
	private $oferta;

	public function __Construct() {
		$this->ficha = new Ficha(); // Instancia de la Clase del Modelo
		$this->pformacion = new Pformacion();
		$this->estado = new Estado();
		$this->jornada = new Jornada();
		$this->modalidad = new Modalidad();
		$this->oferta = new Oferta();

	}

	public function IndexSelect() {
		require_once 'views/ficha/fichaSelect.php';
	}

	public function Index() {

		require_once 'views/ficha/index.php';
	}

	public function Eliminar() {
		$this->ficha->Delete($_REQUEST['id']);
		require_once 'views/ficha/fichaSelect.php';
	}

	public function Insertar() {

		$datos = $this->ficha;

		//$datos->name = $_REQUEST['nombre'];
		$datos->fic_num = $_REQUEST['fic_num'];
		$datos->fic_fecIn = $_REQUEST['fic_fecIn'];
		$datos->fic_fecfin = $_REQUEST['fic_fecfin'];
		$datos->fic_progra = $_REQUEST['fic_progra'];
		$datos->fic_est = $_REQUEST['fic_est'];
		$datos->fic_jor = $_REQUEST['fic_jor'];
		$datos->fic_mod = $_REQUEST['fic_mod'];
		$datos->fic_ofer = $_REQUEST['fic_ofer'];

		$this->ficha->Insert($datos);

		require_once 'views/ficha/fichaSelect.php';
	}
	public function Actualizar() {

		$datos = $this->ficha;

		$datos->fic_num = $_REQUEST['fic_num'];
		$datos->fic_fecIn = $_REQUEST['fic_fecIn'];
		$datos->fic_fecfin = $_REQUEST['fic_fecfin'];
		$datos->fic_progra = $_REQUEST['fic_progra'];
		$datos->fic_est = $_REQUEST['fic_est'];
		$datos->fic_jor = $_REQUEST['fic_jor'];
		$datos->fic_mod = $_REQUEST['fic_mod'];
		$datos->fic_ofer = $_REQUEST['fic_ofer'];
		$datos->id = $_REQUEST['id'];

		$this->ficha->Update($datos);

		require_once 'views/ficha/fichaSelect.php';
	}

}
?>