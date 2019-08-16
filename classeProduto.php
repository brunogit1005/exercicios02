<?php 
	class Produto{
		
		public $nome;
		public $descricao;
		public $tipo;
		public $unidade;
		public $preco;

		function __construct($n,$d,$t,$u,$p){
            $this->nome = $n;
            $this->descricao = $d;
            $this->tipo = $t;
            $this->unidade = $u;
            $this->preco = $p;
        }
		
		public function mostrar_dados(){
			echo "<fieldset>
				<div>
					<label>Nome:</label> ".$this->nome."
				</div>
				<div>
					<label>Descrição:</label> ".$this->descricao."
				</div>
				<div>
					<label>Tipo(perecível/ Não perecível):</label> ".$this->tipo."
				</div>
				<div>
					<label>unidade:</label> ".$this->unidade."
				</div>
				<div>
					<label>Preço:</label> ".$this->preco."
				</div>
			</fieldset>";
		}
		
		public function exibe_tr(){
			echo "<tr>
				<td>".$this->nome."</td>
				<td>".$this->descricao."</td>
				<td>".$this->tipo."</td>
				<td>".$this->unidade."</td>
				<td>".$this->preco."</td>
			</tr>";
		}
	}
?>