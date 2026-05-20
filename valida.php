<?php 

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $idade = $_POST['idade'];
   $cidade = $_POST['cidade'];
   $sexo = $_POST['sexo'];
   $obs = $_POST['observacoes'];

if (empty($nome) ||
    empty($email) ||
    empty($idade) ||
    empty($cidade) ||
    empty($sexo)){

    echo "<h2>Erro: Existem campos vazios!</h2>";
    exit():
}

if (!is_numeric($idade)) {

    echo "<h2>Erro: A idade deve ser numérica!</h2>";
    exit();
}

echo "<h1>Dados Cadastrados</h1>";

echo "<b>Nome:</b> $nome <br><br>";
echo "<b>E-mail:</b> $email <br><br>";
echo "<b>Idade:</b> $idade <br><br>";
echo "<b>Cidade:</b> $cidade <br><br>";
echo "<b>Sexo:</b> $sexo <br><br>";
echo "<b>Observações:</b> $obs <br><br>";



 ?>