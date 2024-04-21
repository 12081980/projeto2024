<?php
$idContato =mysqli_real_escape_string($conexao,$_POST['idContato']); 

$nomeContato =mysqli_real_escape_string($conexao,$_POST['nomeContato']);

$emailContato =mysqli_real_escape_string($conexao,$_POST["emailContato"]);

$telefoneContato =mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);

$dataNascContato =mysqli_real_escape_string($conexao,$_POST["dataNascContato"]);

$sexoContato =mysqli_real_escape_string($conexao,$_POST["sexoContato"]);

$enderecoContato =mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);

$numeroContato =mysqli_real_escape_string($conexao,$_POST["numeroContato"]);

$cidadeContato =mysqli_real_escape_string($conexao,$_POST["cidadeContato"]);

$estadoContato =mysqli_real_escape_string($conexao,$_POST["estadoContato"]);

$sql = "UPDATE contatos SET 
nomeContato='{$nomeContato}',
 emailContato ='{$emailContato}',
telefoneContato  ='{$telefoneContato}',
dataNascContato='{$dataNascContato}',
sexoContato='{$sexoContato}',
EnderecoContato='{$enderecoContato}',
numeroContato='{$numeroContato}',
 cidadeContato='{$cidadeContato}',
estadoContato='{$estadoContato}'
WHERE idContato ='{$idContato}'";
//  echo "<pre>";
//  var_dump($nomeContato);
//  echo "</pre>";
$result = mysqli_query($conexao,$sql)or die ("Erro ao tentar realizar o cadstro".mysqli_error($conexao));


echo"Dados atualizados com sucesso";       
header("Refresh: 3;url=index.php?menuop=areaAdm");