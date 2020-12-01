<?php
class Fiusu {
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

			$sql = $this->pdo->prepare("SELECT FicUsu_Id,tblficha_FIc_Id,tblusuario_Usu_Identificacion,tblusuario.Usu_Nomb1,tblusuario.Usu_Nomb2,tblusuario.Usu_Ape1,tblusuario.Usu_Ape2, tblprogramaformacion.Pro_Codigo,tblficha.Fic_NumeroFicha from tblrel_ficha_usuario,tblficha,tblusuario,tblprogramaformacion where tblficha_FIc_Id=tblficha.Fic_Id and tblusuario_Usu_Identificacion=tblusuario.Usu_Identificacion and tblficha.TblProgramaFormacion_Pro_IdProg=tblprogramaformacion.Pro_IdProg order by FicUsu_Id asc");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}
	}

	public function Get($id) {

		try {
			$sql = $this->pdo->prepare("SELECT * FROM tblrel_ficha_usuario WHERE FicUsu_Id=?;");
			$sql->execute(array($id));
			return $sql->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}

	}
	public function Insert(Fiusu $data) {
		try {
			$sql = "INSERT INTO tblrel_ficha_usuario (tblficha_FIc_Id,tblusuario_Usu_Identificacion) VALUES(?,?)";
			$this->pdo->prepare($sql)->execute(array($data->fiusu_fic,
				$data->fiusu_usu));
		} catch (Exception $e) {
			die($e->getMessage());

		}
	}

	public function Update(Fiusu $data) {

		try {

			$sql = "UPDATE tblrel_ficha_usuario SET tblficha_FIc_Id=? , tblusuario_Usu_Identificacion=? WHERE FicUsu_Id=?;";
			$this->pdo->prepare($sql)->execute(array($data->fiusu_fic, $data->fiusu_usu,$data->id));
		} catch (Exception $e) {
			die($e->getMessage());

		}

	}

	public function Delete($id) {
		try {
			$sql = "DELETE FROM tblrel_ficha_usuario WHERE FicUsu_Id=?;";
			$this->pdo->prepare($sql)->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

}

?>