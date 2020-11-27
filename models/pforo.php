<?php
	class Pforo
	{
		private $pdo;

		public function __Construct(){

			try{

				$this->pdo=Database::Conectar();
			}catch(Exception $e){
				die($e->getMessage());

			}
		}

		public function Select($id){

			try{

				$sql=$this->pdo->prepare("SELECT ParFor_Id,ParFor_Fecha,ParFor_Participante,ParFor_Respuesta,TblForo_For_IdForo, tblforo.For_NombreForo from tblforo,tblparticipacionforo where  tblparticipacionforo.TblForo_For_IdForo=tblforo.For_IdForo and tblparticipacionforo.TblForo_For_IdForo=?  order by ParFor_Id ASC");
				$sql->execute(array($id));
				return $sql->fetchALL(PDO::FETCH_OBJ);
			}catch(Exception $e){

				die($e->getMessage());
			}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tblparticipacionforo WHERE ParFor_Id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Pforo $data){
			try   {
	 				$sql= "INSERT INTO tblparticipacionforo (ParFor_Fecha,ParFor_Participante,ParFor_Respuesta,TblForo_For_IdForo) VALUES(?,?,?,?)";
	 				//echo $sql;
	 				$this->pdo->prepare($sql)  ->execute(array(
	 					$data->pfor_fec,
	 					$data->pfo_usu,
	 					$data->pfor_res,
	 					$data->pfor_for 			
	 				));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(Pforo $data){

			try   {

			 		$sql= "UPDATE tblparticipacionforo SET ParFor_Fecha=?,
			 		ParFor_Participante=?,
			 		ParFor_Respuesta=?,
			 		TblForo_For_IdForo=?
			 		 WHERE ParFor_Id=?;";
			 		$this->pdo->prepare($sql)  ->execute(array(
			 			$data->pfor_fec,
	 					$data->pfo_usu,
	 					$data->pfor_res,
	 					$data->pfor_for,
	 					$data->id
	 				)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE from tblparticipacionforo  WHERE ParFor_Id=?;";
					$this->pdo->prepare($sql)  ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>