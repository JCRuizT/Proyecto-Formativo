<?php 
	require_once 'models/horario.php';
	require_once 'models/ficha.php';

	

	class HorarioController{
		private $horario;
		private $ficha;

		function __Construct()
								{
									$this->horario=new Horario();
									$this->ficha = new Ficha();
								}

		public function IndexSelect() {
			require_once 'views/horario/horarioSelect.php';
	}

	 

		public function Index()
								{
									
									require_once('views/horario/index.php');
										
								}

		public function Eliminar()
								{
									$ruta = 'views/assets/horarios/';
									unlink($ruta.$_POST["hor_ruta"]);
									
									$this->horario->Delete($_REQUEST['id']);
									require_once('views/horario/horarioSelect.php');
								}
								//aqui
		public function Insertar()
								{	
									date_default_timezone_set('America/Bogota');
									$fecha = date('Ymd_Hi');
									$nombre=$_POST['hor_triNo'];
									

									$name=$_FILES['hor_ruta']['name'];
									$ext =explode('.',$name);
									$ext = end($ext);
									$temp =$_FILES['hor_ruta']['tmp_name'];
									$ruta = 'views/assets/horarios/';
									$file = $fecha.$nombre.".".$ext;


									if(is_uploaded_file($temp)){

										move_uploaded_file($temp, $ruta.$file);
									}else{
										echo "NO se cargo la imagen";
									}

									$datos = $this->horario;
									$datos->hor_trini = $_REQUEST['hor_trini'];
									$datos->hor_trifin = $_REQUEST['hor_trifin'];
									$datos->hor_triNo = $_REQUEST['hor_triNo'];
									$datos->hor_ruta = $file;
									$datos->hor_fic = $_REQUEST['hor_fic'];

									$this->horario->Insert($datos);
									require_once('views/horario/horarioSelect.php');
								}

		public function Actualizar()
								{	
									date_default_timezone_set('America/Bogota');
									$fecha = date('Ymd_Hi');
									$nombre=$_POST['hor_triNo'];	

							if(isset($_FILES['hor_ruta']['name'])){
									$name=$_FILES['hor_ruta']['name'];
									$ext =explode('.',$name);
									$ext = end($ext);
									$temp =$_FILES['hor_ruta']['tmp_name'];
									$ruta = 'views/assets/horarios/';
									$file = $fecha.$nombre.".".$ext;

									$horario2=$_POST['hor_ruta2'];
									unlink($ruta.$horario2);

									if(is_uploaded_file($temp)){

										move_uploaded_file($temp, $ruta.$file);
									}else{
										echo "NO se cargo la imagen";
									}

									}else{
										$horario2=$_POST['hor_ruta2'];
										$file=$horario2;
									}								
									$datos = $this->horario;
									$datos->hor_trini = $_REQUEST['hor_trini'];
									$datos->hor_trifin = $_REQUEST['hor_trifin'];
									$datos->hor_triNo = $_REQUEST['hor_triNo'];
									$datos->hor_ruta = $file;
									$datos->hor_fic =$_REQUEST['hor_fic'];
									$datos->id = $_REQUEST['id'];

									$this->horario->Update($datos);
									require_once('views/horario/horarioSelect.php');
								}

	}
?>