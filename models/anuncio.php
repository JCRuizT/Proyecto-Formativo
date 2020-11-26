<?php

class Anuncio {
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
			$sql = $this->pdo->prepare("SELECT ta.Anun_Id,ta.Anun_Nombre,ta.Anun_Cuerpo,ta.Anun_Fecha_Creacion,tu.Usu_Nomb1,tu.Usu_Ape1 FROM tblanuncio as ta,tblusuario as tu where ta.TblEstado_Est_Id= 1 and tu.Usu_Identificacion = ta.TblUsuario_Usu_Id ORDER BY ta.Anun_Id DESC");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

	public function Insert(Anuncio $data) {
		try {

			$sql = "INSERT INTO tblanuncio VALUES(?,?,?,?,?,?)";
			$this->pdo->prepare($sql)->execute(
				array(
					$data->titulo,
					$data->descrp,
					$data->fchcre,
					$data->ficid,
					$data->estid,
					$data->usuid,
				)
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Delete($id) {
		try {
			$sql = "UPDATE tblanuncio set TblEstado_Est_Id WHERE Anun_Id=?";
			$this->pdo->prepare($sql)->execute(
				array(
					$id,
				)
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Update(Anuncio $data) {
		try {
			$sql = "UPDATE tblanuncio SET Anun_Nombre=?,Anun_Cuerpo=?
				WHERE Anun_Id=?";

			$this->pdo->prepare($sql)->execute(
				array(

					$data->titulo,
					$data->descrp,
					$data->id,

				)
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}

?>