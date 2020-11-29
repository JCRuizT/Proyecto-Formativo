<?php
	class Horario
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

				$sql=$this->pdo->prepare("SELECT Hor_Id,Hor_TrimestreInicio,Hor_TrimestreFin,Hor_TrimestreNumero,Hor_Ruta,TblFicha_Fic_Id,tblficha.Fic_NumeroFicha,tblprogramaformacion.Pro_Codigo,tblprogramaformacion.Pro_NombreProg from tblhorario,tblficha,tblprogramaformacion where 
tblhorario.TblFicha_Fic_Id=tblficha.Fic_Id and tblprogramaformacion.Pro_IdProg=tblficha.TblProgramaFormacion_Pro_IdProg order by Hor_Id asc");
				$sql->execute();
				return $sql->fetchALL(PDO::FETCH_OBJ);
			}catch(Exception $e){

				die($e->getMessage());
			}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tblhorario WHERE Hor_Id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Horario $data){
			try   {
	 				$sql= "INSERT INTO tblhorario (Hor_TrimestreInicio,Hor_TrimestreFin,Hor_TrimestreNumero,Hor_Ruta,TblFicha_Fic_Id) VALUES(?,?,?,?,?)";
	 				$this->pdo->prepare($sql)  ->execute(array($data->hor_trini,
	 					$data->hor_trifin,
	 					$data->hor_triNo,
	 					$data->hor_ruta,
	 					$data->hor_fic
	 				 ));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(Horario $data){

			try   {

			 		$sql= "UPDATE tblhorario SET Hor_TrimestreInicio=? , Hor_TrimestreFin=?,Hor_TrimestreNumero=?,Hor_Ruta=?,TblFicha_Fic_Id=?   WHERE Hor_Id=?;";
			 		$this->pdo->prepare($sql)  ->execute(array($data->hor_trini,	
			 			$data->hor_trifin,
	 					$data->hor_triNo,
	 					$data->hor_ruta,
	 					$data->hor_fic,
			 			$data->id)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE FROM tblhorario WHERE Hor_Id=?;";
					$this->pdo->prepare($sql)  ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>