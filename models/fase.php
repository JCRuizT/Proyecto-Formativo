<?php
class Fase {
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

			$sql = $this->pdo->prepare("SELECT * FROM tblfase order by Fase_Id asc");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}
	}

	public function Get($id) {

		try {
			$sql = $this->pdo->prepare("SELECT * FROM tblfase WHERE Fase_Id=?;");
			$sql->execute(array($id));
			return $sql->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {

			die($e->getMessage());
		}

	}

	public function Insert(Fase $data) {
		try {
			$sql = "INSERT INTO tblfase (Fase_Nombre) VALUES(?)";
			$this->pdo->prepare($sql)->execute(array($data->name));
		} catch (Exception $e) {
			die($e->getMessage());

		}
	}

	public function Update(Fase $data) {

		try {

			$sql = "UPDATE tblfase SET Fase_Nombre=?   WHERE Fase_Id=?;";
			$this->pdo->prepare($sql)->execute(array($data->name, $data->id));
		} catch (Exception $e) {
			die($e->getMessage());

		}

	}

	public function Delete($id) {
		try {
			$sql = "DELETE FROM tblfase WHERE Fase_Id=?;";
			$this->pdo->prepare($sql)->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

}

?>