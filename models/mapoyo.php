<?php
	class Mapoyo
	{
		private $pdo;

		public function __Construct(){

			try{

				$this->pdo=Database::Conectar();
			}catch(Exception $e){
				die($e->getMessage());

			}
		}

		public function Select($fase){

			try{

				$sql=$this->pdo->prepare("SELECT Mat_Id,Mat_Titulo,Mat_FechaCreacion,Mat_Descripcion,Mat_Ruta,TblUsuario_Usu_Id,TblFase_Fase_Id, tblusuario.Usu_Nomb1,tblusuario.Usu_Nomb2,tblusuario.Usu_Ape1,tblusuario.Usu_Ape2,tblfase.Fase_Nombre, tblprogramaformacion.Pro_NombreProg,tblprogramaformacion.Pro_Codigo,tblficha.Fic_NumeroFicha, tblrel_material_ficha.MacFic_Id from tblmaterialapoyo,tblusuario,tblprogramaformacion,tblficha,tblrel_material_ficha, tblfase WHERE tblmaterialapoyo.Mat_Id=tblrel_material_ficha.TblMaterialApoyo_Mat_Id and tblficha.Fic_Id=tblrel_material_ficha.TblFicha_Fic_Id and tblmaterialapoyo.TblFase_Fase_Id = tblfase.Fase_Id and tblprogramaformacion.Pro_IdProg=tblficha.TblProgramaFormacion_Pro_IdProg and TblUsuario_Usu_Id=tblusuario.Usu_Identificacion and TblFase_Fase_Id=? order by Mat_Id ASC");
				$sql->execute(array($fase));
				return $sql->fetchALL(PDO::FETCH_OBJ);
			}catch(Exception $e){

				die($e->getMessage());
			}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tblmaterialapoyo WHERE Mat_Id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Mapoyo $data){
			try   {
	 				$sql= "INSERT INTO tblmaterialapoyo (Mat_Titulo,Mat_FechaCreacion,Mat_Descripcion,Mat_Ruta,TblUsuario_Usu_Id,TblFase_Fase_Id) VALUES(?,?,?,?,?,?)";
	 				$this->pdo->prepare($sql)  ->execute(array(
	 					$data->mat_tit,
	 					$data->mat_fec,
	 					$data->mat_desc,
	 					$data->mat_ruta,
	 					$data->mat_usu,
	 					$data->mat_fase
	 			
	 				));

 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }

 				     $this->Metodo($data->mat_fic);

				 }



		 public function Update(Mapoyo $data){

			try   {

			 		$sql= "UPDATE tblmaterialapoyo SET Mat_Titulo=?,
			 		Mat_FechaCreacion=?,
			 		Mat_Descripcion=?,
			 		Mat_Ruta=?,
			 		TblUsuario_Usu_Id=?		
			 		 WHERE Mat_Id=?;";
			 		$this->pdo->prepare($sql)  ->execute(array(
			 			$data->mat_tit,
	 					$data->mat_fec,
	 					$data->mat_desc,
	 					$data->mat_ruta,
	 					$data->mat_usu,
	 					$data->id
	 				)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE FROM tblmaterialapoyo WHERE Mat_Id=?;";
					$this->pdo->prepare($sql)  ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}

		
		public function Metodo($ficha){
			try   {
					$sql= "CALL material_ficha(?)";
					$this->pdo->prepare($sql)  ->execute(array($ficha));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }
		}


	}

?>