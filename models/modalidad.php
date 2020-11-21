<?php
class Modalidad {
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

			$sql = $this->pdo->prepare("SELECT * FROM tblmodalidad order by Mod_Id asc");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}
	}

	public function Get($id) {

		try {
			$sql = $this->pdo->prepare("SELECT * FROM tblmodalidad WHERE Mod_Id=?;");
			$sql->execute(array($id));
			return $sql->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}

	}
	public function Insert(Modalidad $data) {
		try {
			$sql = "INSERT INTO tblmodalidad (Mod_Nombre) VALUES(?)";
			$this->pdo->prepare($sql)->execute(array($data->name));
		} catch (Exception $e) {
			die($e->getMessage());

		}
	}

	public function Update(Modalidad $data) {

		try {

			$sql = "UPDATE tblmodalidad SET Mod_Nombre=?   WHERE Mod_Id=?;";
			$this->pdo->prepare($sql)->execute(array($data->name, $data->id));
		} catch (Exception $e) {
			die($e->getMessage());

		}

	}

	public function Delete($id) {
		try {
			$sql = "DELETE FROM tblmodalidad WHERE Mod_Id=?;";
			$this->pdo->prepare($sql)->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

}

?>