<?php

session_start();
include 'pesquisa.php';

$questao3 = $_GET["questao3"];
switch ($questao3) {
    case 1:
        $_SESSION["questao3"] = "ruim";
        break;
    case 2:
         $_SESSION["questao3"] = "bom";
        break;
    case 3:
         $_SESSION["questao3"] = "otimo";
        break;
}

include './conexaoFirebird.php';
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d');
    $time = date('H:i');    

$pesquisa = new pesquisa();
$pesquisa->setComanda($_SESSION["comanda"]);
$pesquisa->setVendedor($_SESSION["vendedor"]);
$pesquisa->setQuestao1($_SESSION["questao1"]);
$pesquisa->setQuestao2($_SESSION["questao2"]);
$pesquisa->setQuestao3($_SESSION["questao3"]);
$pesquisa->setData($date);
$pesquisa->setTime($time);


$pesquisa->salvar($pesquisa);

 

