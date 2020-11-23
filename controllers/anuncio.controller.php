<?php

require_once 'models/anuncio.php';

class AnuncioController {
	private $anuncio;

	function __Construct() {
		$this->anuncio = new Anuncio(); // Instancia de la Clase del Modelo Usuario
	}

	public function Index() {
		require_once 'views/anuncio/index.php';
	}

	public function Insertar() {

		$datos = $this->anuncio;

		$datos->titulo = $_REQUEST['titulo'];
		$datos->descrp = $_REQUEST['descrp'];
		$datos->fchcre = $_REQUEST['fchcre'];
		$datos->fchfin = $_REQUEST['fchfin'];
		$datos->usuid = $_REQUEST['usuid'];
		$datos->ficid = $_REQUEST['ficid'];
		$datos->estid = 1;
		$this->anuncio->Insert($datos);

		require_once 'views/anuncio/anuncioSelect.php';
	}

	public function Eliminar() {
		$this->anuncio->Delete($_REQUEST['id']);
		require_once 'views/anuncio/anuncioSelect.php';
	}

	public function Actualizar() {
		$datos = $this->anuncio;

		$datos->titulo = $_REQUEST['titulo'];
		$datos->descrp = $_REQUEST['descrp'];
		$datos->fchcre = $_REQUEST['fchcre'];
		$datos->fchfin = $_REQUEST['fchfin'];
		$datos->usuid = $_REQUEST['usuid'];
		$datos->ficid = $_REQUEST['ficid'];
		$datos->id = $_REQUEST['id'];

		$this->anuncio->Update($datos);
		require_once '../views/anuncio/anuncioSelect.php';
	}

}

?>