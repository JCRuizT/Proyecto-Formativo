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

		date_default_timezone_set('America/Bogota');
		$datos = $this->anuncio;
		$datos->titulo = $_REQUEST['titulo'];
		$datos->descrp = $_REQUEST['descripcion'];
		$datos->ficid = 1; // para cambiar dependiendo la ficha
		$datos->fchcre = date('Y-m-d');
		$datos->usuid = 1005934460; // dependiendo la session, y el usuario ingresado
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

		$datos->id = $_REQUEST['id'];
		$datos->titulo = $_REQUEST['titulo'];
		$datos->descrp = $_REQUEST['descripcion'];

		$this->anuncio->Update($datos);
		require_once 'views/anuncio/anuncioSelect.php';
	}

}

?>