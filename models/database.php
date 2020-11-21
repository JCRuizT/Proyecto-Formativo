<?php
	class Database
	{
		public static function Conectar()
		{
			$pdo = new PDO('mysql:host=localhost;dbname=bdintrasoft;charset=utf8','admin','juliocruizt');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
?>