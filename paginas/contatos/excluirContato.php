<h3>Excluir</h3>


<?php
$idContato =mysqli_real_escape_string($conexao,$_GET['idContato']);



$idContato =$_GET["idContato"];
$sql = "DELETE FROM contatos WHERE idContato =$_GET[idContato] ";
mysqli_query($conexao,$sql) or die("Erro ao excluir o registro".mysqli_error($conexao));

echo"Registro excluido com sucesso";       
header("Refresh: 3;url=index.php?menuop=areaAdm");