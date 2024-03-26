



<div class="contentLogin">
    
<form method="POST" action="index.php?menuop=verificaLogin">
<div >
        <label for="emailContato">E-mail</label>
<input type="email" name="emailContato" placeholder="Digite um email válido" class="inputs required" oninput="emailValid()"required>
              <p class="span-required">Digite um email válido</p>
        </div>


        <div >
        <label for="senhaContato">Senha</label>
<input type="password" name="senhaContato" placeholder="Digite sua senha" class="inputs required" oninput="senhaValidate()"required>
              <p class="span-required">Senha</p>
        </div>
                    
                 

                    <div >
                    <button type="submit">Enviar</button>
                    </div>
     <div class="logar">              <a href="index.php?menuop=cadContato">Ainda não é inscrito? Cadastre-se!</a>
    </div> 

            </form>
            </div>