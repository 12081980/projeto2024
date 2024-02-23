<header>
    <h3>Cadastrar cliente</h3>
</header>
<div class="form">
    <form action="index.php?menuop=inserirContato" method="post">

         <div class="formitem">
<label for="nomeContato">Nome</label>
<input type="text" name="nomeContato" required>
        </div>
   
        <div class="formitem">
        <label for="emailContato">E-mail</label>
<input type="email" name="emailContato"required>
        </div>
        <div class="formitem">
        <label for="telefoneContato">Telefone</label>
<input type="text" name="telefoneContato"required>
        </div>
  
        <div class="formitem">
        <label for="dataNascContato">Data de nascimento</label>
<input type="date" name="dataNascContato"required>
        </div>

               <div class="formitem">
                <p>Sexo</p>
        <label for="sexoContato">Feminino</label>
<input type="radio"  value="feminino" name="sexoContato">
<label for="sexoContato">Masculino</label>
<input type="radio"  value="masculino" name="sexoContato"> 

</div>

        <div class="formitem">
        <label for="enderecoContato">Endereço</label>
<input type="text" name="enderecoContato"required>
        </div>

        <div class="formitem">
        <label for="numeroContato">Número</label>
<input type="text" name="numeroContato"required>
        </div>

        <div class="formitem">
        <label for="cidadeContato">Cidade</label>
<input type="text" name="cidadeContato"required>
        </div>
        <div class="formitem">
        <label for="estadoContato">Estado</label>
<input type="text" name="estadoContato"required>
        </div>

        <div class="input">
            <input type="submit" value="Cadastrar" name="btnCadastro">
        </div>
    </form>
</div>
