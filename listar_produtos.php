<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        
    </head>
    <body>
		<?php
		include("classeProduto.php");
		session_start();
		include("cabecalho.php");
		 echo"<table border ='1'>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Tipo</th>
					<th>Unidade</th>
					<th>Preço</th>
				</tr>
			</thead>
			<tbody>";
					
					foreach($_SESSION["produto"]as $i=>$p){
						$p->exibe_tr();
					}
		?>
			</tbody>
	</body>
  </html>