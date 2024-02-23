<?php

Class Usuario{
    private $pdo;
    public function __construct($dbname,$host,$user,$senhaContato)
    {
    
        try{
        $this->pdo =new PDO("mysql:dbname=".$dbname.";host".$host,$user,$senhaContato);
        }
        catch(Exception $e) {
            echo "Erro de conexao:".$e->getMessage();
            exit();
        }
        catch(Exception $e){
            echo "Erro :".$e->getMessage();
            exit();
        }
    }

public function buscarDados(){
    $res = array();
    $cmd=$this->pdo->query("SELECT * FROM contatos ");
    $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}

public function cadastrarUsuario($nomeContato,$emailContato,$telefoneContato,$dataNascContato,$enderecoContato,$numeroContato,$cidadeContato,$estadoContato){
$cmd =$this ->pdo->prepare("SELECT idContato FROM contatos WHERE emailContato =:emailContato");
$cmd->bindValue(":emailContato",$emailContato);
$cmd->execute();
if($cmd->rowCount()>0){
    return false;
}else{
    $cmd =$this->pdo->prepare("INSERT INTO contatos(nomeContato,emailContato,telefoneContato,dataNascContato,enderecoContato,numeroContato,cidadeContato,estadoContato) VALUES(:nomeContato,:emailContato,:telefoneContato,:dataNascContato,:enderecoContato,:numeroContato,:cidadeContato,:estadoContato,)");
    $cmd->bindValue(":nomeContato",$nomeContato);
    $cmd->bindValue(":emailContato",$emailContato); 
    $cmd->bindValue(":telefoneContato",$telefoneContato);   
    $cmd->bindValue(":dataNascContato",$dataNascContato);
    // $cmd->bindValue(":enderecoContato",$enderecoContato);
    // $cmd->bindValue(":numeroContato",$numeroContato);
    // $cmd->bindValue(":cidadeContato",$cidadeContato);
    // $cmd->bindValue(":estadoContato",$estadoContato);
    $cmd->execute();
    return true;
}
}
public function excluirUsuario($idContato){
$cmd = $this->pdo->prepare("DELETE FROM contatos WHERE idContato= :idContato");
$cmd->bindValue(":idContato",$idContato);
$cmd->execute();

}
public function buscarDadosUsuario($idContato)
{
    $res= array();
    $cmd=$this->pdo->prepare("SELECT * FROM contatos WHERE idContato=:idContato");
    $cmd->bindValue(":idContato",$idContato);
    $cmd ->execute();
    $res =$cmd->fetch(PDO::FETCH_ASSOC);
    return $res;
}

public function atualizarDados($idContato,$nome,$matricula,$email,$senhaContato)
{
 
     $cmd=$this->pdo->prepare("UPDATE contatos SET nome=:n,matricula=:m,email=:e,senhaContato=:s  WHERE idContato=:idContato");
    $cmd->bindValue(":n",$nome);
    $cmd->bindValue(":m",$matricula);
    $cmd->bindValue(":e",$email);  
    $cmd->bindValue(":s",$senhaContato);
    $cmd->bindValue(":idContato",$idContato);
    $cmd->execute();
    
   
}
public function logar($matricula,$senhaContato)
{
$cmd = $this-> pdo->prepare("SELECT idContato FROM contatos WHERE matricula =:m AND senhaContato=:s");
$cmd->bindValue(":m",$matricula);  
$cmd->bindValue(":s",$senhaContato);
$cmd->execute();
if($cmd->rowCount()>0){
    $dado=$cmd->fetch(); 
    session_start();
    $_SESSION['idContato']= $dado['idContato'];
    return true;
}else{
    return false;
}
}


}




