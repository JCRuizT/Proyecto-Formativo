<?php
	class Foro
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

				$sql=$this->pdo->prepare("SELECT For_IdForo,For_NombreForo,For_CuerpoForo,For_Fecha,TblUsuario_Usu_Id,tblforo.TblEstado_Est_Id,TblFicha_Fic_Id,tblusuario.Usu_Nomb1,tblusuario.Usu_Nomb2,tblusuario.Usu_Ape1,tblusuario.Usu_Ape2,tblprogramaformacion.Pro_NombreProg,tblprogramaformacion.Pro_Codigo,tblficha.Fic_NumeroFicha from tblforo,tblusuario,tblprogramaformacion,tblficha where tblforo.TblUsuario_Usu_Id=tblusuario.Usu_Identificacion and tblforo.TblFicha_Fic_Id=tblficha.Fic_Id and tblficha.TblProgramaFormacion_Pro_IdProg=tblprogramaformacion.Pro_IdProg order by For_IdForo ASC");
				$sql->execute();
				return $sql->fetchALL(PDO::FETCH_OBJ);
			}catch(Exception $e){

				die($e->getMessage());
			}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tblforo WHERE For_IdForo=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Foro $data){
			try   {
	 				$sql= "INSERT INTO tblforo (For_NombreForo,For_CuerpoForo,For_Fecha,TblUsuario_Usu_Id,TblEstado_Est_Id,TblFicha_Fic_Id) VALUES(?,?,?,?,?,?)";
	 				$this->pdo->prepare($sql)  ->execute(array(
	 					$data->for_nom,
	 					$data->for_cue,
	 					$data->for_fec,
	 					$data->for_usu,
	 					$data->for_est,
	 					$data->for_fic
	 			
	 				));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(Foro $data){

			try   {

			 		$sql= "UPDATE tblforo SET For_NombreForo=?,
			 		For_CuerpoForo=?,
			 		For_Fecha=?,
			 		TblUsuario_Usu_Id=?,
			 		TblEstado_Est_Id=?,
			 		TblFicha_Fic_Id=?		
			 		 WHERE For_IdForo=?;";
			 		$this->pdo->prepare($sql)  ->execute(array(
			 			$data->for_nom,
	 					$data->for_cue,
	 					$data->for_fec,
	 					$data->for_usu,
	 					$data->for_est,
	 					$data->for_fic,
	 					$data->id
	 				)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "UPDATE tblforo SET TblEstado_Est_Id=2  WHERE For_IdForo=?;";
					$this->pdo->prepare($sql)  ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>