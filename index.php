<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atividade - Sistema de Cadastro de Contato/Cliente</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

  <h1>Sistema de Cadastro de Contato/Cliente</h1>

  <form action="valida.php" method="post">
  <label for="nome">Nome Completo:</label>
  <input type="text" name="nome" id="nome" maxlength="100" required autocomplete="off" autofocus> <br><br>	

  <label for="email">E-mail:</label>
  <input type="email" name="email" id="email" maxlength="100" required autocomplete="off"> <br><br>	

  <label for="idade">Idade:</label>
  <input type="text" name="idade" id="idade" maxlength="20" required autocomplete="off"> <br><br>	

  <label for="cidade">Cidade:</label>
  <input type="text" name="cidade" id="cidade" maxlength="100" required autocomplete="off"> <br><br>	

  <label for="sexo">Sexo:</label>
  <input type="text" name="sexo" id="sexo" maxlength="50" required autocomplete="off"> <br><br>	

  <label for="observacoes">Observações:</label>
  <textarea id="observaoes" name="observacoes" rows="5" cols="40" maxlength="300" placeholder="Digite suas observações aqui"></textarea>

  <input type="submit" name="enviar" value="Enviar">
  
  </form>

</body>
</html>