<?php

session_start();
include 'pesquisa.php';
$_SESSION["questao2"] = $_POST['btnQuestao2'];

$pesquisa = new pesquisa();
$pesquisa->setComanda($_SESSION["comanda"]);
$pesquisa->setVendedor($_SESSION["vendedor"]);
$pesquisa->setQuestao1($_SESSION["questao1"]);
$pesquisa->setQuestao2($_SESSION["questao2"]);

echo $pesquisa->salvar($pesquisa);

