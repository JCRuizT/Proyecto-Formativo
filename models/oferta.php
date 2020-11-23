<?php
class Oferta {
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

			$sql = $this->pdo->prepare("SELECT * FROM tbltipooferta order by TipOfe_Id asc");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}
	}

	public function Get($id) {

		try {
			$sql = $this->pdo->prepare("SELECT * FROM tbltipooferta WHERE TipOfe_Id=?;");
			$sql->execute(array($id));
			return $sql->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}

	}
	public function Insert(Oferta $data) {
		try {
			$sql = "INSERT INTO tbltipooferta (TipOfe_Nombre) VALUES(?)";
			$this->pdo->prepare($sql)->execute(array($data->name));
		} catch (Exception $e) {
			die($e->getMessage());

		}
	}

	public function Update(Oferta $data) {

		try {

			$sql = "UPDATE tbltipooferta SET TipOfe_Nombre=?   WHERE TipOfe_Id=?;";
			$this->pdo->prepare($sql)->execute(array($data->name, $data->id));
		} catch (Exception $e) {
			die($e->getMessage());

		}

	}

	public function Delete($id) {
		try {
			$sql = "DELETE FROM tbltipooferta WHERE TipOfe_Id=?;";
			$this->pdo->prepare($sql)->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

}

?>