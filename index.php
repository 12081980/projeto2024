<?php
include ("db/conexao.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <header>
        <h1>SisAgenda</h1>
        <nav>
            <a href="index.php?menuop=home">Home</a>
            <a href="index.php?menuop=contatos">Contatos</a>
            <a href="index.php?menuop=tarefas">Tarefas</a>
            <a href="index.php?menuop=eventos">Eventos</a>
        </nav>
    </header>
    <main>
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
    case 'tarefas':
    include ("paginas/tarefas/tarefas.php");
    break;
    case 'eventos':
    include ("paginas/eventos/eventos.php");
    break;
    default:
    include ("paginas/home/home.php");

}

?>
    </main>
    <footer>

    </footer>
</body>
</html>