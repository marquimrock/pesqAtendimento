<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="frmQuestao1" name="frmQuestao1" method="post" action="pagina2.php">
            <label name="lblComanda">comanda</label><br>
            <input type="text" name="comanda"><br>
            <label name="lblQuestao1">Questão1?</label><br>
            <button name="btnQuestao1" value="ruim">Ruim!</button>
            <button name="btnQuestao1" value="bom">Bom!</button>
            <button name="btnQuestao1" value="otimo">Ótimo!</button>
        </form>
        <input type="submit" name="Proximo" value="Relatorio" onClick="javascript:window.location.href='relatorio.php'">

    </body>
</html>