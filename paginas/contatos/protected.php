<?php

if(isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['emailContato'])){
    die("Você não está logado. <p><a href=\"index.php?menuop=login\">Logar</a></p>");
}