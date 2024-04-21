
<?php
    // Verifica se estamos conectados ao BD
    if ( ! isset( $conexao) || ! is_object( $conexao)){
        exit('Erro na conexão com o banco de dados.');
    }
    
    // Une $_SESSION e $POST para verificação
    if ( isset( $_POST ) && ! empty( $_POST ) ) {
        $dados_usuario = $_POST;
    } else {
        $dados_usuario = $_SESSION;
    }
    
    // Verifica se os campos de usuário e senha existem
    // E se não estão em branco
    if ( 
        isset ( $dados_usuario['usuario'] ) && 
        isset ( $dados_usuario['senha'] )   &&
      ! empty ( $dados_usuario['usuario'] ) &&
      ! empty ( $dados_usuario['senha'] ) 
    ) {
        // Faz a consulta do nome de usuário na base de dados
        $pdo_checa_user = $conexao->prepare('SELECT * FROM contatos WHERE user = ? LIMIT 1');
        $verifica_pdo = $pdo_checa_user->execute( array( $dados_usuario['usuario'] ) );
        
        // Verifica se a consulta foi realizada com sucesso
        if ( ! $verifica_pdo ) {
            $erro = $pdo_checa_user->errorInfo();
            exit( $erro[2] );
        }
          // Busca os dados da linha encontrada
        $fetch_usuario = $pdo_checa_user->fetch();
       // Verifica se a senha do usuário está correta
        if ( crypt( $dados_usuario['senhaContato'], $fetch_usuario['user_password'] ) === $fetch_usuario['user_password'] ) {
            // O usuário está logado
            $_SESSION['logado']       = true;
            $_SESSION['nome_usuario'] = $fetch_usuario['user_name'];
            $_SESSION['usuario']      = $fetch_usuario['user'];
            $_SESSION['user_id']      = $fetch_usuario['user_id'];
            $_SESSION['nivel']      = $fetch_usuario['nivel'];
              if($_SESSION['nivel'] == "1"){
                header("Location:index.php?menuop=areaAdm");
                }elseif($_SESSION['nivel'] == "2"){
                    header("Location:index.php?menuop=areaClienteContato");
                    }elseif($_SESSION['nivel'] == "3"){
                        header("Location:index.php?menuop=agendar");
                }     
    
        } else {
            // Continua deslogado
            $_SESSION['logado']     = false;
            // Preenche o erro para o usuário
            $_SESSION['login_erro'] = 'Usuário ou senha inválidos';
        }
    }
    ?>