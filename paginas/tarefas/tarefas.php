<?php
  $pesquisa = (isset($_POST["pesquisa"]))?$_POST["pesquisa"]:"";
 ?>
 
 <header>  
 </header>
<div class="pesquisa">
    <form action="index.php?menuop=tarefas" method="POST">
        <input type="text" name="pesquisa">
        <input type="submit"  value="Consulta">
    </form>
</div>


<div class="btnCad">
    <a href="index.php?menuop=cadTarefa">Cadastrar nova tarefa</a>
</div>

<div class="taf"> 
 <table>
    <thead>
        <tr>         
            
            <th>Status</th>
            <th>Titulo</th>
            <th>Descrição</th>           
            <th>Data da conclusão</th>
            <th>Hora da conclusao</th>
            
            <th colspan="2">Editar</th>
              
        </tr>       
     
    </thead>
 

    <?php


            $quantidade = 3;

            $pagina =(isset($_GET['pagina']))?(int)$_GET['pagina']:1;
            
            $inicio=($quantidade*$pagina)- $quantidade;
            
            
                
            
            
            $sql= "SELECT idTarefa,
            statusTarefa,tituloTarefa,descricaoTarefa,
            DATE_FORMAT(dataConclusaoTarefa,'%d/%m/%Y') AS dataConclusaoTarefa,horaConclusaoTarefa FROM tarefas

            WHERE 
            tituloTarefa ='{$pesquisa}' or 
            descricaoTarefa LIKE '%{$pesquisa}%' or   DATE_FORMAT(dataConclusaoTarefa,'%d/%m/%Y') LIKE '%{$pesquisa}%'
            ORDER BY statusTarefa,dataConclusaoTarefa
            LIMIT  $inicio,$quantidade
            ";
            
            $result = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta" .mysqli_error($conexao));
            
            while ($dados= mysqli_fetch_assoc($result)){
                ?>
                <tr
                class="item">
                  
                    <td >
                        <a class="btn-status" href="#">
                           <?php
if($dados['statusTarefa']==0){
    echo' <i class="fa fa-square-o" aria-hidden="true"></i>';
}else{
 echo'<i class="fa-solid fa-check"></i>';
}
                           ?>
                        </a>
                   </td>
                   
                    <td><?=$dados["tituloTarefa"]?></td>
                    <td><?=$dados["descricaoTarefa"]?></td>
                    <td><?=$dados["dataConclusaoTarefa"]?></td>
                    <td><?=$dados["horaConclusaoTarefa"]?></td>
                   
                    <td> 
                    <div class="editar"> 
                    <a href="index.php?menuop=editarTarefa&idTarefa=<?=$dados['idTarefa']?>"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a href="index.php?menuop=excluirTarefa&idTarefa=<?=$dados['idTarefa']?>"><i class="fa-solid fa-trash"></i></a>
            </div>
        </td>




                </tr>
            <?php
            }          
        
        ?>

    </tbody>
 </table>

 </div>

 <?php

$quantidade = 3;

$pagina =(isset($_GET['pagina']))?(int)$_GET['pagina']:1;

$inicio=($quantidade*$pagina)- $quantidade;


$sqlTotal="SELECT idTarefa FROM tarefas";
$queryReult= mysqli_query($conexao,$sqlTotal) or die (mysqli_error($conexao));
$numeroTotal = mysqli_num_rows($queryReult);
$totalPag = ceil($numeroTotal/$quantidade);
?>

<?php

echo "<a href=\"?menuop=t&pagina=1\">Primeira pagina</a>";

if($pagina>3){
    ?>
    <a href="?menuop=t&pagina=<?php echo $pagina-1?>"> << </a>

   <?php 

}

for ($i = 1; $i <=$totalPag; $i++){    
    
if($i>=($pagina-3) && $i <= ($pagina+3)){
    if($i==$pagina){
       echo $i;
           
    }else{
        echo "<a href=\"?menuop=t&pagina=$i\">$i</a>";
    }
    }
}
if($pagina<($totalPag-3)){
    ?>
    <a href="?menuop=t&pagina=<?php echo $pagina+1?>"> >> </a>
   
    <?php
    
}

echo"<a href=\"?menuop=t&pagina=$totalPag\"> Última pagina</a>";
            
        
 ?>
 </div>
<div class="total">
    <?php echo "Total de tarefas: $numeroTotal";
    
    ?>

 </div>