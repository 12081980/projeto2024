<?php
$idContato= $_GET["idContato"];
$sql ="SELECT * FROM contatos WHERE idContato=($idContato)";

$result =mysqli_query($conexao,$sql) or die("Erro ao tentar recuperar os dados" .mysqli_error($conexao));

$dados = mysqli_fetch_assoc($result);

?>


<h3>Editar</h3>

<div class="form">
    <form action="index.php?menuop=atualizarContato" method="post">

         <div class="formitem">
<label for="idContato">Verificador</label>
<input type="text" name="idContato" value="<?= $dados["idContato"]?>" >
        </div>

         <div class="formitem">
<label for="nomeContato">Nome</label>
<input type="text" name="nomeContato" value="<?= $dados["nomeContato"]?>" >
        </div>
   
        <div class="formitem">
        <label for="emailContato">E-mail</label>
<input type="email" name="emailContato" value="<?= $dados["emailContato"]?>">
        </div>
        <div class="formitem">
        <label for="telefoneContato">Telefone</label>
<input type="text" name="telefoneContato" value="<?= $dados["telefoneContato"]?>">
        </div>
  
        <div class="formitem">
        <label for="dataNascContato">Data de nascimento</label>
<input type="date" name="dataNascContato" value="<?= $dados["dataNascContato"]?>">
        </div>

               <div class="formitem">
                <p>Sexo</p>
        <label for="sexoContato">Feminino</label>
<input type="radio"  value="feminino" name="sexoContato">
<label for="sexoContato">Masculino</label>
<input type="radio"  value="masculino" name="sexoContato" value="<?= $dados["sexoContato"]?>"> 

</div>

        <div class="formitem">
        <label for="enderecoContato">Endereço</label>
<input type="text" name="enderecoContato" value="<?= $dados["enderecoContato"]?>">
        </div>

        <div class="formitem">
        <label for="numeroContato">Número</label>
<input type="text" name="numeroContato" value="<?= $dados["numeroContato"]?>">
        </div>

        <div class="formitem">
        <label for="cidadeContato">Cidade</label>
<input type="text" name="cidadeContato" value="<?= $dados["cidadeContato"]?>">
        </div>
        <div class="formitem">
        <label for="estadoContato">Estado</label>
<input type="text" name="estadoContato" value="<?= $dados["estadoContato"]?>">
        </div>

        <div class="input">
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>
