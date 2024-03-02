
<div class="content">                 
    <form action="index.php?menuop=inserirContato" method="post">

         <div >
<label for="nomeContato">Nome</label>
<input type="text" name="nomeContato" placeholder="Digite seu nome" class="inputs required" oninput="nameValidate()"required>
              <p class="span-required">Nome deve ter no minimo 3 caracteres</p>
        </div>
   
        <div >
        <label for="emailContato">E-mail</label>
<input type="email" name="emailContato" placeholder="Digite um email válido" class="inputs required" oninput="emailValidate()"required>
              <p class="span-required">Digite um email válido</p>
        </div>
        <div >
        <label for="telefoneContato">Telefone</label>
<input type="text" name="telefoneContato"placeholder="Digite seu telefone" class="inputs required" oninput="telefoneValidate()"required>
              <p class="span-required">Digite um telefone válido</p>
        </div>
  
        <div >
        <label for="dataNascContato">Data de nascimento</label>
<input type="date" name="dataNascContato"placeholder="Digite seu nome" class="inputs required" oninput="datanascValidate()"required>
              <p class="span-required">Nome deve ter no minimo 3 caracteres</p>
        </div>
               <div >

<p>Sexo</p>
    <div class="box-select">
        <div>
        <input type="radio" id="masc" value="M" name="sexoContato">
        <label for="masc">Masculino</label>
    </div>
    <div>
        <input type="radio" id="fem" value="F" name="sexoContato">
        <label for="fem">Feminino</label>
    </div>

</div>

        <div >
        <label for="enderecoContato">Endereço</label>
<input type="text" name="enderecoContato"placeholder="Digite seu endereço" class="inputs required" oninput="enderecoValidate()">
              <p class="span-required">Digite o nome correto do seu logradouro</p>
        </div>

        <div >
        <label for="numeroContato">Número</label>
<input type="text" name="numeroContato"placeholder="Digite o número" class="inputs required" oninput="numeroValidate()">
              <p class="span-required">Digite o número correto da sua residencia</p>
        </div>

        <div >
        <label for="cidadeContato">Cidade</label>
<input type="text" name="cidadeContato"placeholder="Digite sua cidade" class="inputs required" oninput="cidadeValidate()"required>
              <p class="span-required">cidade deve ter no minimo 3 caracteres</p>
        </div>
        <div >
        <label for="estadoContato">Estado</label>
<input type="text" name="estadoContato" placeholder="Digite seu estado" class="inputs required" oninput="estadoValidate()"required>
              <p class="span-required">Digite um estado válido</p>
        </div>

        
        <button type="submit">Enviar</button>
    </form>
</div>
