<?php

//ibase_connect — Abre uma conexão com um banco de dados InterBase
//pode ser colocado o IP, ou nome do computador onde esta o banco de dados
 
$servidor = '127.0.0.1:C:/Mobility_Gestao/banco/banco.FDB';
 
//conexão com o banco, se der erro mostrara uma mensagem.
if (!($dbh=ibase_connect($servidor, 'SYSDBA', 'masterkey')))
        die('Erro ao conectar: ' .  ibase_errmsg());
//Instruções SQL

$sql = 'SELECT * FROM usuarios';
 /*
//Executa a instrução SQL
$query= ibase_query ($dbh, $sql);
 
//gera um loop com as linhas encontradas
while ($row = ibase_fetch_object ($query)) {
 
    //imprimi as linhas na tela
    echo $row->ID . "<BR>";
 
}
 
//Libera a memoria usada
ibase_free_result($query);
 
//fecha conexão com o firebird
ibase_close($dbh);
*/