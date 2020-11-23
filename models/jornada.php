<?php
	class Jornada
	{
		private $pdo;

		public function __Construct(){

			try{

				$this->pdo=Database::Conectar();
			}catch(Exception $e){
				die($e->getMessage());

			}
		}

		public function Select(){

			try{

				$sql=$this->pdo->prepare("SELECT * FROM tbltipojornada order by TipJor_Id asc");
				$sql->execute();
				return $sql->fetchALL(PDO::FETCH_OBJ);
			}catch(Exception $e){

				die($e->getMessage());
			}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tbltipojornada WHERE TipJor_Id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Jornada $data){
			try   {
	 				$sql= "INSERT INTO tbltipojornada (TipJor_Nombre) VALUES(?)";
	 				$this->pdo->prepare($sql)  ->execute(array($data->name ));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(Jornada $data){

			try   {

			 		$sql= "UPDATE tbltipojornada SET TipJor_Nombre=?   WHERE TipJor_Id=?;";
			 		$this->pdo->prepare($sql)  ->execute(array($data->name,	$data->id)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE FROM tbltipojornada WHERE TipJor_Id=?;";
					$this->pdo->prepare($sql)  ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>