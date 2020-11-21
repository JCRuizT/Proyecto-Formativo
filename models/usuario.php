<?php

class Usuario {
	private $pdo;
	private $id;

	public function __Construct() {
		try { $this->pdo = Database::Conectar();} catch (Exception $e) {die($e->getMessage());}
	}

	public function Select() {
		try {
			$sql = $this->pdo->prepare("SELECT * FROM TBL_USUARIO order by usu_id desc");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {die($e->getMessage());}
	}

	public function Delete($id) {
		try {
			$sql = "DELETE FROM usuario WHERE id=?";
			$this->pdo->prepare($sql)
				->execute(
					array(
						$id,
					)
				);
		} catch (Exception $e) {die($e->getMessage());}
	}

	public function Insert(Usuario $data) {
		try {
			$sql = "INSERT INTO usuario(usuario,nombres,area,clave,estado)
										 										        VALUES(?,?,?,?,?)";
			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->usuario,
						$data->nombres,
						$data->area,
						md5($data->clave),
						$data->estado,
					)
				);
		} catch (Exception $e) {die($e->getMessage());}
	}

	public function Update(Usuario $data) {
		try {
			$sql = "UPDATE usuario
									 									 SET usuario = ?,
									 										 nombres = ?,
									 										 area    = ?,
									 										 clave   = ?,
									 										 estado  = ?
									 								  WHERE  id = ? ";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->usuario,
						$data->nombres,
						$data->area,
						md5($data->clave),
						$data->estado,
						$data->id,
					)
				);
		} catch (Exception $e) {die($e->getMessage());}
	}

}
?>