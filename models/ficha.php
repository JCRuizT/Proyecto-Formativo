<?php
	class Ficha
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

				$sql=$this->pdo->prepare("SELECT * FROM tblficha order by Fic_Id asc");
				$sql->execute();
				return $sql->fetchALL(PDO::FETCH_OBJ);
			}catch(Exception $e){

				die($e->getMessage());
			}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tblficha WHERE Fic_Id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Ficha $data){
			try   {
	 				$sql= "INSERT INTO tblficha (Fic_NumeroFicha,Fic_FechaInicio,Fic_FechaFin,TblProgramaFormacion_Pro_IdProg,TblEstado_Est_Id,TblTipoJornada_TipJor_Id,TblModalidad_Mod_Id,TblTipoOferta_TipOfe_Id) VALUES(?,?,?,?,?,?,?,?)";
	 				$this->pdo->prepare($sql)  ->execute(array(
	 					$data->fic_num,
	 					$data->fic_fecIn,
	 					$data->fic_fecfin,
	 					$data->fic_progra,
	 					$data->fic_est,
	 					$data->fic_jor,
	 					$data->fic_mod,
	 					$data->fic_ofer
	 			
	 				));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(Ficha $data){

			try   {

			 		$sql= "UPDATE tblficha SET Fic_NumeroFicha=?,
			 		Fic_FechaInicio=?,
			 		Fic_FechaFin=?,
			 		TblProgramaFormacion_Pro_IdProg=?,
			 		TblEstado_Est_Id=?,
			 		TblTipoJornada_TipJor_Id=?,
			 		TblModalidad_Mod_Id=?,
			 		TblTipoOferta_TipOfe_Id=? 
			 		 WHERE Fic_Id=?;";
			 		$this->pdo->prepare($sql)  ->execute(array(
			 			$data->fic_num,
	 					$data->fic_fecIn,
	 					$data->fic_fecfin,
	 					$data->fic_progra,
	 					$data->fic_est,
	 					$data->fic_jor,
	 					$data->fic_mod,
	 					$data->fic_ofer,
	 					$data->id
	 				)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "UPDATE tblficha SET TblEstado_Est_Id=2  WHERE Fic_Id=?;";
					$this->pdo->prepare($sql)  ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>