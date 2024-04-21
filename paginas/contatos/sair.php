<?php
if(!isset($_SESSION)){
    session_start();
}

session_destroy();


echo "Deslogado com sucesso";
header("Refresh: 3;url=index.php?menuop=login");



?>
