<?php
 $nomeContato = addslashes(isset($_POST['nomeContato'])) ? $_POST['nomeContato'] : "";

$nomeContato =mysqli_real_escape_string($conexao,$_POST['nomeContato']);

$emailContato =mysqli_real_escape_string($conexao,$_POST["emailContato"]);

$telefoneContato =mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);

$dataNascContato =mysqli_real_escape_string($conexao,$_POST["dataNascContato"]);

$sexoContato =mysqli_real_escape_string($conexao,$_POST["sexoContato"]);

$enderecoContato =mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);

$numeroContato =mysqli_real_escape_string($conexao,$_POST["numeroContato"]);

$cidadeContato =mysqli_real_escape_string($conexao,$_POST["cidadeContato"]);

$estadoContato =mysqli_real_escape_string($conexao,$_POST["estadoContato"]);

$senhaContato =mysqli_real_escape_string($conexao,$_POST["senhaContato"]);

$sql =  "INSERT INTO contatos(nomeContato,emailContato,telefoneContato,dataNascContato,sexoContato,enderecoContato,numeroContato,cidadeContato,estadoContato,senhaContato)
 VALUES(
   '{$nomeContato}',
   '{$emailContato}',
   '{$telefoneContato}',
   '{$dataNascContato}',
   '{$sexoContato}',
   '{$enderecoContato}',
   '{$numeroContato}',
   '{$cidadeContato}',
   '{$estadoContato}'
   '{$senhaContato}'
 )";

$result = mysqli_query($conexao,$sql)or die ("Erro ao tentar realizar o cadstro".mysqli_error($conexao));


echo"Cadastro realizado com sucesso";       
header("Refresh: 3;url=index.php?menuop=contatos");