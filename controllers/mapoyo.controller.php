<?php
require_once 'models/mapoyo.php';
require_once 'models/ficha.php';
require_once 'models/usuario.php';
require_once 'models/fase.php';

class MapoyoController {

	private $mapoyo;
	private $fase;
	private $fase2;
	private $ficha;
	private $usuario;
	public function __Construct() {
		$this->mapoyo = new Mapoyo();
		$this->ficha = new Ficha(); 
		$this->usuario = new Usuario();
		$this->fase = new Fase();
	}
	public function Verforo  (){
		require_once 'views/mapoyo/mapoyo.php';
	}

	public function IndexSelect() {
		require_once 'views/mapoyo/pforoSelect.php';
	}

	public function Index() {
		$this->fase2 = $_REQUEST['mat_fase'];
		require_once 'views/mapoyo/index.php';
	}

	public function Eliminar() {
		//$this->mapoyo->Delete($_REQUEST['id']);
		$this->fase2 = $_REQUEST['mat_fase'];
		$ruta = 'views/assets/mapoyo/';
		unlink($ruta.$_POST["ma_ruta"]);
								
		$this->mapoyo->Delete($_REQUEST['id']);
		require_once 'views/mapoyo/mapoyoSelect.php';
	}

	public function Insertar() {
								date_default_timezone_set('America/Bogota');
									$fecha = date('Ymd_Hi');
									$nombre=$_POST['mat_tit'];
									

									$name=$_FILES['mat_ruta']['name'];
									$ext =explode('.',$name);
									$ext = end($ext);
									$temp =$_FILES['mat_ruta']['tmp_name'];
									$ruta = 'views/assets/mapoyo/';
									$file = $fecha.$nombre.".".$ext;


									if(is_uploaded_file($temp)){

										move_uploaded_file($temp, $ruta.$file);
									}else{
										echo "NO se cargo la imagen";
									}
	$this->fase2 = $_REQUEST['mat_fase'];
		$datos = $this->mapoyo;

		 $datos->mat_tit = $_REQUEST['mat_tit'];
		 $datos->mat_fec = $_REQUEST['mat_fec'];
		 $datos->mat_desc = $_REQUEST['mat_desc'];
		 $datos->mat_ruta = $file;
		  $datos->mat_usu = $_REQUEST['mat_usu'];
		   $datos->mat_fase = $_REQUEST['mat_fase'];
		   $datos->mat_fic = $_REQUEST['mat_fic'];
		$this->mapoyo->Insert($datos);

		require_once 'views/mapoyo/mapoyoSelect.php';
	}
	public function Actualizar() {
				date_default_timezone_set('America/Bogota');
									$fecha = date('Ymd_Hi');
									$nombre=$_POST['mat_tit'];	

							if(isset($_FILES['mat_ruta']['name'])){
									$name=$_FILES['mat_ruta']['name'];
									$ext =explode('.',$name);
									$ext = end($ext);
									$temp =$_FILES['mat_ruta']['tmp_name'];
									$ruta = 'views/assets/mapoyo/';
									$file = $fecha.$nombre.".".$ext;

									$mapoyo2=$_POST['mat_ruta2'];
									unlink($ruta.$mapoyo2);

									if(is_uploaded_file($temp)){

										move_uploaded_file($temp, $ruta.$file);
									}else{
										echo "NO se cargo la imagen";
									}

									}else{
										$mapoyo2=$_POST['mat_ruta2'];
										$file=$mapoyo2;
									}

									$this->fase2 = $_REQUEST['mat_fase'];
		$datos = $this->mapoyo;

		
		 $datos->mat_tit = $_REQUEST['mat_tit'];
		 $datos->mat_fec = $_REQUEST['mat_fec'];
		 $datos->mat_desc = $_REQUEST['mat_desc'];
		 $datos->mat_ruta = $file;
		 $datos->mat_usu = $_REQUEST['mat_usu'];
		$datos->id = $_REQUEST['id'];

		$this->mapoyo->Update($datos);

		require_once 'views/mapoyo/mapoyoSelect.php';
	}

}
?>