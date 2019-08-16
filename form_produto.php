<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastra</title>
    </head>
    <body>
    <?php

	include("cabecalho.php");

    echo"<form action=\"cadastra_produto.php\" method=\"POST\">
    
        <p><label>Nome:</label>
                <input type=\"text\" name=\"nome\" size=\"30\" required/>
            </p>
        <p><label>Descrição:</label>
                <input type=\"text\" name=\"descricao\"/>
            </p>
		<p><label>tipo:</label>
            <input type=\"radio\" name=\"tipo\" value=\"Perecível\">Perecível
            <input type=\"radio\" name=\"tipo\" value=\"Não perecível\">Não perecível<br>
            </p>
        <p><label>unidade:</label>
            <input type=\"number\" name=\"unidade\"/>
        </p>
        <p><label>Preço:</label>
                <input type=\"number\" name=\"preco\"<br>
        </p>
		
        <input type=\"submit\" value=\"Enviar\"/>
		</form>
		";
            
        ?>
	</body>
</html>