<?php
	error_reporting(E_ALL);
	class TarefaService {
		private $conexao;
		private $tarefa;
		
		public function __construct(Conexao $conexao, Tarefa $tarefa) {
			$this->conexao = $conexao->conectar();
			$this->tarefa = $tarefa;

		}		

		public function inserir() { // create

		}
		public function recuperar () { // read


		}

		public function atualizar () { // update


		}

		public function remover () { // delete


		}

	}


?>
