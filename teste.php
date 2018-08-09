<?php

//ibase_connect — Abre uma conexão com um banco de dados InterBase
//pode ser colocado o IP, ou nome do computador onde esta o banco de dados

$servidor = '127.0.0.1:C:/Mobility_Gestao/banco/banco.FDB';

//conexão com o banco, se der erro mostrara uma mensagem.
if (!($dbh = ibase_connect($servidor1, 'SYSDBA', 'masterkey')))
    die('Erro ao conectar: ' . ibase_errmsg());
