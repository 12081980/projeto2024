<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['emailContato']) && !empty($_POST['senhaContato'] ))
{
   
    include_once('./db/config.php');
    $emailContato =$_POST['emailContato'];
    $senhaContato =$_POST['senhaContato'];


    
}
else{
    header("Location:index.php?menuop=areaClienteContato");
}

    // $sql= "SELECT *FROM contatos WHERE 
    // emailContato='$emailContato' AND 
    // senhaContato='$senhaContato'";
    // $result= mysqli_query($conexao,$sql) or die (mysqli_error($conexao));

    // if (mysqli_num_rows($result)<1){
    //    unset( $_SESSION['emailContato']);
    //    unset( $_SESSION['senhaContato']);
       
    //     header("Refresh: 3;url=index.php?menuop=login");
      
    // //    echo"Usuarios ou senha incorretos";       
    // //     header("Refresh: 3;url=index.php?menuop=login");
      
      
    // }
    // else{
              
    //     header("Location:index.php?menuop=areaClienteContato");
    // }







