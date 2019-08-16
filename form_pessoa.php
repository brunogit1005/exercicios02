<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastra</title>
    </head>
    <body>
    <?php

	include("cabecalho.php");

    <form action = cadastra_produto.php method=POST\>
    
        <p><label>Nome:</label>
                <input type = "text" name = "nome" size= 30 required/>
            </p>
        <p><label>Email:</label>
                <input type= "text" name= "email "/>
            </p>
		<p><label>Telefone:</label>
                <input type= "number" name= "telefone "/>
            </p>
        <p><label>Sexo:</label>
                <input type= "radio" name="sexo" value="Masculino">Masculino
                <input type= "radio" name="sexo" value="Feminino">Feminino<br>
        </p>
        <p><label>Idade:</label>
                <input type= "number" name= "idade"<br>
        </p>
		
        <input type= "submit" value= "Enviar"/>
		</form>
            
        ?>
	</body>
</html>