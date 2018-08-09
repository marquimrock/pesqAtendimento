<?php
$servidor = '127.0.0.1:C:/Mobility_Gestao/banco/banco.FDB';

//conexão com o banco, se der erro mostrara uma mensagem.
if (!($dbh = ibase_connect($servidor, 'SYSDBA', 'masterkey')))
    die('Erro ao conectar: ' . ibase_errmsg());
