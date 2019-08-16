<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        
    </head>
    <body>
		<?php
		include("classeProduto.php");
		include("cabecalho.php");
		
		$n = $_POST["nome"];
		$d = $_POST["descricao"];
		$t = $_POST["tipo"];
		$u = $_POST["unidade"];
		$p = $_POST["preco"];

		$p = new Produto($n,$d,$t,$u,$p);
			
		echo "Produto cadastrado com sucesso!";
		
		$p->mostrar_dados();

		session_start();
		
		$_SESSION["produto"][] = $p;
		
		?>
	</body>
  </html>