<?php


// require_once './model/ClasseUsuario.php';
// $user = new Usuario("dbagenda", "localhost", "root", "");



//  if (isset($_POST['nomeContato'])) {

// $nomeContato = addslashes(isset($_POST['nomeContato'])) ? $_POST['nomeContato'] : "";

// $emailContato = addslashes(isset($_POST['emailcontato'])) ? $_POST['emailcontato'] : "";

// $telefoneContato = addslashes(isset($_POST['telefoneContato'])) ? $_POST['telefoneContato'] : "";

// $dataNascContato = addslashes(isset($_POST['dataNascContato'])) ? $_POST['dataNascContato'] : "";

// $enderecoContato = addslashes(isset($_POST['enderecoContato'])) ? $_POST['enderecoContato'] : "";

// $numeroContato = addslashes(isset($_POST['numeroContato'])) ? $_POST['numeroContato'] : "";

// $cidadeContato = addslashes(isset($_POST['cidadeContato'])) ? $_POST['cidadeContato'] : "";

// $estadoContato = addslashes(isset($_POST['estadoContato'])) ? $_POST['estadoContato'] : "";

// // if (!empty($nomeContato) && !empty($emailContato)  &&   !empty($telefoneContato) &&  !empty($dataNascContato)&&  !empty($enderecoContato)&&  !empty($numeroContato)&&  !empty($cidadeContato)&&  !empty($estadoContato));

//     if (!$user->cadastrarUsuario($nomeContato, $emailContato,$telefoneContato,$dataNascContato,$enderecoContato,$numeroContato,$cidadeContato,$estadoContato)) {

//         echo"Cadastro realizado com sucesso";       
//         header("Refresh: 3;url=index.php?menuop=contatos");
//     }


//  }

 


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

$sql =  "INSERT INTO contatos(nomeContato,emailContato,telefoneContato,dataNascContato,sexoContato,enderecoContato,numeroContato,cidadeContato,estadoContato)
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
 )";
//  echo "<pre>";
//  var_dump($nomeContato);
//  echo "</pre>";
$result = mysqli_query($conexao,$sql)or die ("Erro ao tentar realizar o cadstro".mysqli_error($conexao));


echo"Cadastro realizado com sucesso";       
header("Refresh: 3;url=index.php?menuop=contatos");