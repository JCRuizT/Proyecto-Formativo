<?php

class Permisos{

	public function administrador($user) {

		if ($user != 1) {
			return null;
		}
	}

	public function instructor($user) {

		if ($user != 2) {
			return null;
		}
	}

	public function aprendiz($user) {
		if ($user != 3) {

			return null;
		}
	}

	public function visitante($user){

		if($this->administrador($user) == null && this->aprendiz($user) == null){
			return null;
		}
	}


	public function funcionario($user){

		if($this->administrador($user) == null && this->instructor($user) == null){
			return null;
		}
	}
	
}

?>