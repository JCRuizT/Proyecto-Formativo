<?php
class Rol {
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

			$sql = $this->pdo->prepare("SELECT * FROM tblrol order by Rol_Id asc");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}
	}

	public function Get($id) {

		try {
			$sql = $this->pdo->prepare("SELECT * FROM tblrol WHERE Rol_Id=?;");
			$sql->execute(array($id));
			return $sql->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}

	}

	public function Insert(Rol $data) {
		try {
			$sql = "INSERT INTO tblrol (Rol_Nombre) VALUES(?)";
			$this->pdo->prepare($sql)->execute(array($data->name));
		} catch (Exception $e) {
			die($e->getMessage());

		}
	}

	public function Update(Rol $data) {

		try {

			$sql = "UPDATE tblrol SET Rol_Nombre=?   WHERE Rol_Id=?;";
			$this->pdo->prepare($sql)->execute(array($data->name, $data->id));
		} catch (Exception $e) {
			die($e->getMessage());

		}

	}

	public function Delete($id) {
		try {
			$sql = "DELETE FROM tblrol WHERE Rol_Id=?;";
			$this->pdo->prepare($sql)->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

}

?>