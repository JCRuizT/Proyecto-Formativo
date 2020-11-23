<?php
class Error404Controller {

	public function Index() {
		require_once 'views/error404/index.php';
	}

	public function IndexSelect() {
		require_once 'views/error404/errorSelect.php';
	}

}

?>