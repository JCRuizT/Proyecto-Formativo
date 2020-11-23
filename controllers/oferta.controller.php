<?php
require_once 'models/oferta.php';

class OfertaController {

	private $oferta;

	public function __Construct() {
		$this->oferta = new Oferta(); // Instancia de la Clase del Modelo Usuario
	}

	public function IndexSelect() {
		require_once 'views/oferta/ofertaSelect.php';
	}

	public function Index() {
		require_once 'views/oferta/index.php';
	}

	public function Eliminar() {
		$this->oferta->Delete($_REQUEST['id']);
		require_once 'views/oferta/ofertaSelect.php';
	}

	public function Insertar() {

		$datos = $this->oferta;

		$datos->name = $_REQUEST['nombre'];

		$this->oferta->Insert($datos);

		require_once 'views/oferta/ofertaSelect.php';
	}
	public function Actualizar() {

		$datos = $this->oferta;

		$datos->name = $_REQUEST['nombre'];
		$datos->id = $_REQUEST['id'];
		$this->oferta->Update($datos);

		require_once 'views/oferta/ofertaSelect.php';
	}

}
?>