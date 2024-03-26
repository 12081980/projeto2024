<?php
  $pesquisa = (isset($_POST["pesquisa"]))?$_POST["pesquisa"]:"";
 ?>
  
<div class="pesquisa">
    <form action="index.php?menuop=verificaLogin" method="POST">
        <input   type="text" name="pesquisa" value="<?= $pesquisa?>">
        <input type="submit"  value="Consulta">
    </form>

</div>

<div class="cadmais" >
    <a href="index.php?menuop=cadContato">Cadastrar novo cliente <i class="fa-solid fa-plus"></i></a>
</div>
</div>
<div class="cad"> 
 <table>
    
    <thead>
        <tr>         
            
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>           
            <th>Data de nascimento</th>
            <th>Sexo</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th colspan="2">Editar</th>
              
        </tr>       
     
    </thead>
    

    <?php


            $quantidade = 3;

            $pagina =(isset($_GET['pagina']))?(int)$_GET['pagina']:1;
            
            $inicio=($quantidade*$pagina)- $quantidade;
            
            
                
           
            
            $sql= "SELECT 
            idContato,
            upper(nomeContato) AS nomeContato,
            lower(emailContato) AS emailContato,
            telefoneContato,
            upper(enderecoContato) AS enderecoContato,
            CASE
            
            WHEN sexoContato ='F' THEN 'FEMININO'
            WHEN sexoContato ='M' THEN 'MASCULINO'
            ELSE 
            'NÃO ESPECIFICADO'
            END AS sexoContato,
            DATE_FORMAT(dataNascContato,'%d/%m/%Y') AS dataNascContato,
            numeroContato,cidadeContato,estadoContato
            
            FROM contatos
            
            WHERE
            nomeContato ='{$pesquisa}' or 
            emailContato LIKE '%{$pesquisa}%'
            
            LIMIT  $inicio,$quantidade
            ";
            
            $result = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta" .mysqli_error($conexao));
            
            while ($dados= mysqli_fetch_assoc($result)){
                ?>
                <tr
                class="item">
                  
                    <td ><?=$dados["nomeContato"]?></td>
                    <td><?=$dados["emailContato"]?></td>
                    <td><?=$dados["telefoneContato"]?></td>
                    <td><?=$dados["dataNascContato"]?></td>
                    <td><?=$dados["sexoContato"]?></td>
                    <td><?=$dados["enderecoContato"]?></td>
                    <td><?=$dados["numeroContato"]?></td>
                    <td><?=$dados["cidadeContato"]?></td>
                    <td><?=$dados["estadoContato"]?></td>
                    <td>
                        
                    <div class="editar">   
                    <a href="index.php?menuop=editarContato&idContato=<?=$dados['idContato']?>"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a href="index.php?menuop=excluirContato&idContato=<?=$dados['idContato']?>"><i class="fa-solid fa-trash"></i></a>
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


$sqlTotal="SELECT idContato FROM contatos";
$queryReult= mysqli_query($conexao,$sqlTotal) or die (mysqli_error($conexao));
$numeroTotal = mysqli_num_rows($queryReult);
$totalPag = ceil($numeroTotal/$quantidade);




echo "<a href=\"?menuop=contatos&pagina=1\">Primeira pagina</a>";

if($pagina>3){
    ?>
    <a href="?menuop=contatos&pagina=<?php echo $pagina-1?>"> << </a>

    <?php

}

for ($i = 1; $i <=$totalPag; $i++){    
    
if($i>=($pagina-3) && $i <= ($pagina+3)){
    if($i==$pagina){
       echo $i;
           
    }else{
        echo "<a href=\"?menuop=contatos&pagina=$i\">$i</a>";
    }
    }
}
if($pagina<($totalPag-3)){
    ?>
   
    <a href="?menuop=contatos&pagina=<?php echo $pagina+1?>"> >> </a>
    
    <?php
}

echo"<a href=\"?menuop=contatos&pagina=$totalPag\"> Última pagina</a>";
            
    
 ?>
 </div>
 <div class="total">
    <?php echo "Total de clientes: $numeroTotal";
    
    ?>
 </div>