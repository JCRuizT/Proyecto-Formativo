<?php
class Pformacion {
	private $pdo;

	public function __Construct() {

		try {

			$this->pdo = Database::Conectar();
		} catch (Exception $e) {
			die($e->getMessage());

		}
	}

	public function Select() {

		try {

			$sql = $this->pdo->prepare("SELECT * FROM tblprogramaformacion as pf,tbltipoprograma as tp ,tblestado where  TblEstado_Est_Id = Est_Id and tp.Tip_Prog = pf.Tip_Prog order by Pro_IdProg asc");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}
	}

	public function Get($id) {

		try {
			$sql = $this->pdo->prepare("SELECT * FROM tblprogramaformacion WHERE Pro_IdProg=?;");
			$sql->execute(array($id));
			return $sql->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}

	}

	public function Insert(Pformacion $data) {
		try {
			$sql = "INSERT INTO tblprogramaformacion (Pro_NombreProg,Pro_Codigo,Pro_Version,Pro_Duracion,Tip_Prog,TblEstado_Est_Id) VALUES(?,?,?,?,?,?)";
			$this->pdo->prepare($sql)->execute(array($data->name, $data->codigo, $data->version, $data->duracion, $data->tipoPrograma, $data->estado));
		} catch (Exception $e) {
			die($e->getMessage());

		}
	}

	public function Update(Pformacion $data) {

		try {

			$sql = "UPDATE tblprogramaformacion SET Pro_NombreProg=?, Pro_Codigo=?,Pro_Version=?, Pro_Duracion=?, Tip_Prog=?, TblEstado_Est_Id=?  WHERE Pro_IdProg=?;";
			$this->pdo->prepare($sql)->execute(array($data->name, $data->codigo, $data->version, $data->duracion, $data->tipoPrograma, $data->estado, $data->id));
		} catch (Exception $e) {
			die($e->getMessage());

		}

	}

	public function Delete($id) {
		try {
			$sql = "DELETE FROM tblprogramaformacion WHERE Pro_IdProg=?;";
			$this->pdo->prepare($sql)->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

}

?>