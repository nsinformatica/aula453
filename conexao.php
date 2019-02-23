<?php
	error_reporting(E_ALL);
	class Conexao {
		
		private $host = 'localhost';
		private $dbname = 'php_com_pdo';
		private $user = 'root';
		private $pass = '1234';

		public function conectar () {
			try {
				$conexao = new PDO (
					"mysql:host=$this->;dbname=$this->dbname",
					"$this->user",
					"$this->pass"

				);
				return $conexao;

			} catch (PDOException $e) {
				echo '<p>'.$e->getMessege().'</p>';
			}
		}
	}
?>
