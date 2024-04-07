<?php
 include_once('db/config.php');

$emailContato=$_POST['emailContato'];
$senhaContato=$_POST['senhaContato'];

if(isset($_POST['emailContato']) || isset($_POST['senhaContato'])){
    if(strlen($_POST['emailContato'])==0){
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senhaContato']==0)){
        echo "Preencha sua senha";
    }else{
        $emailContato=$conexao->real_escape_string($_POST['emailContato']);
        $senhaContato=$conexao->real_escape_string($_POST['senhaContato']);

        $sql="SELECT*FROM contatos WHERE emailContato='$emailContato' AND senhaContato = '$senhaContato'";

        $sqlResult=$conexao ->query($sql) or die('Falha na execução:' .$mysqli->error);

        $quantidade=$sqlResult->num_rows;
        if($quantidade==1){
$usuarioContato=$sqlResult->fetch_assoc();

if(isset($_SESSION)){
    session_start();
}
$_SESSION['nomeContato']=$usuarioContato['nome'];
$_SESSION['emailContato']=$usuarioContato['email'];

header("Location:index.php?menuop=areaClienteContato");


        }else{
            echo "Email ou Senha incorretos";
            header("Refresh: 3;url=index.php?menuop=login");
        }
    }

}
   
//     include_once('./db/config.php');
//     $emailContato =$_POST['emailContato'];
//     $senhaContato =$_POST['senhaContato'];


    
// }
// else{
//     header("Location:index.php?menuop=areaClienteContato");
// }

//     // $sql= "SELECT *FROM contatos WHERE 
//     // emailContato='$emailContato' AND 
//     // senhaContato='$senhaContato'";
//     // $result= mysqli_query($conexao,$sql) or die (mysqli_error($conexao));

//     // if (mysqli_num_rows($result)<1){
//     //    unset( $_SESSION['emailContato']);
//     //    unset( $_SESSION['senhaContato']);
       
//     //     header("Refresh: 3;url=index.php?menuop=login");
      
//     // //    echo"Usuarios ou senha incorretos";       
//     // //     header("Refresh: 3;url=index.php?menuop=login");
      
      
//     // }
//     // else{
              
//     //     header("Location:index.php?menuop=areaClienteContato");
//     // }







