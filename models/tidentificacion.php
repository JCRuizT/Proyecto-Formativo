<?php
class Tidentificacion {
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

			$sql = $this->pdo->prepare("SELECT * FROM tbltipoidentificacion order by TipIde_Id asc");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}
	}

	public function Get($id) {

		try {
			$sql = $this->pdo->prepare("SELECT * FROM tbltipoidentificacion WHERE TipIde_Id=?;");
			$sql->execute(array($id));
			return $sql->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}

	}

	public function Insert(Tidentificacion $data) {
		try {
			$sql = "INSERT INTO tbltipoidentificacion (TipIde_Nombre) VALUES(?)";
			$this->pdo->prepare($sql)->execute(array($data->name));
		} catch (Exception $e) {
			die($e->getMessage());

		}
	}

	public function Update(Tidentificacion $data) {

		try {

			$sql = "UPDATE tbltipoidentificacion SET TipIde_Nombre=?   WHERE TipIde_Id=?;";
			$this->pdo->prepare($sql)->execute(array($data->name, $data->id));
		} catch (Exception $e) {
			die($e->getMessage());

		}

	}

	public function Delete($id) {
		try {
			$sql = "DELETE FROM tbltipoidentificacion WHERE TipIde_Id=?;";
			$this->pdo->prepare($sql)->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

}

?>