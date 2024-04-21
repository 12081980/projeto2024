<?php
include ("./suporte/header.php");

?>
<?php
$menuop =(isset($_GET['menuop']))?$_GET['menuop']:"home";
switch($menuop){
    case 'home':
    include ("paginas/home/home.php");
    break;
    case 'contatos':
    include ("paginas/contatos/contato.php");
    break;
    case 'cadContato':
    include ("paginas/contatos/cadContato.php");
    break;
    case 'inserirContato':
        include ("paginas/contatos/inserirContato.php");
        break;

        case 'editarContato':
            include ("paginas/contatos/editarContato.php");
            break;
            case 'excluirContato':
                include ("paginas/contatos/excluirContato.php");
                break;
            case 'atualizarContato':
                include ("paginas/contatos/atualizarContato.php");
                break;
    case 'eventos':
    include ("paginas/eventos/eventos.php");
    break;
    case 'login':
    include ("paginas/contatos/login.php");
    break;
    case 'sair':
    include ("paginas/contatos/sair.php");
    break;
    case 'verificaLogin':
    include ("paginas/contatos/verificaLogin.php");
    break;
    case 'areaClienteContato':
    include ("paginas/contatos/areaClienteContato.php");
    break;
    case 'agendar':
    include ("paginas/contatos/agendar.php");
    break;
   
    case 'areaAdm':
    include ("paginas/adm/areaAdm.php");
    break;
    case 'servicos':
    include ("paginas/contatos/servicos.php");
    break;
    default:
    include ("paginas/home/home.php");

}

?>
   
    <?php
    include ("./suporte/footer.php");
    ?>


</body>
<script type="text/javascript" src="./js/formulario.js"></script>
</html>