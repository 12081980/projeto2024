 <?php
require_once './model/ClasseUsuario.php';
$user = new Usuario("dbagenda", "localhost", "root", "");
 ?>
 
 <header>
    <h3>Contatos</h3>
 </header>
<div class="pesquisa">
    <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="pesquisa">
        <input type="submit"  value="Consulta">
    </form>
</div>


<div class="btnCad">
    <a href="index.php?menuop=cadContato">Cadastrar novo cliente</a>
</div>
 <table border="1">
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
    <tbody>

    <?php
    
$pesquisa = (isset($_POST["pesquisa"]))?$_POST["pesquisa"]:"";

$sql= "SELECT * FROM contatos
WHERE
 idContato='{pesquisa}' or 
nomeContato LIKE '%{pesquisa}%'
";
$result = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta" .mysqli_error($conexao));


$dados = $user->buscarDados();
if (count($dados) > 0) {
    for ($i = 0; $i < count($dados); $i++) {
        echo "<tr>";
        foreach ($dados[$i] as $key => $values) {
            if ($key != "idContato") {
                if ($key != "senha"){
                if ($key != "flagFavContato")
                    echo "<td>$values</td>";
                }
            }
            
        }
        ?>





<td> <a href="index.php?menuop=editarContato&idContato=<?=$dados[$i]['idContato']?>">Editar</a>

<a href="index.php?menuop=excluirContato&idContato=<?=$dados[$i]['idContato']?>">Excluir</a>
            <!-- <a href="">Excluir</a> -->
        </td>

<?php




        echo "</tr>";
    }
        
    }


    
?>
    </tbody>
 </table>