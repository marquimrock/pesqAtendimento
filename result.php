<?php

session_start();
include 'pesquisa.php';
$_SESSION["questao3"] = $_POST['btnQuestao3'];

$pesquisa = new pesquisa();
$pesquisa->setComanda($_SESSION["comanda"]);
$pesquisa->setVendedor($_SESSION["vendedor"]);
$pesquisa->setQuestao1($_SESSION["questao1"]);
$pesquisa->setQuestao2($_SESSION["questao2"]);
$pesquisa->setQuestao3($_SESSION["questao3"]);

$pesquisa->salvar($pesquisa);
 

