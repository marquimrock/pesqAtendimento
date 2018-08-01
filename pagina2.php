<?php
session_start();
$_SESSION["comanda"] = $_POST['comanda'];
$_SESSION["questao1"] = $_POST['btnQuestao1'];
$_SESSION["vendedor"] = "vendedor 1";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="frmQuestao2" method="post" action="result.php">
            <label name="lblComanda">comanda</label><br>
            <input type="text" name="comanda" value="<?php echo $_SESSION["comanda"] ?>" readonly="true"> <br>
            <label name="lblQuestao2">Questão 2?</label><br>
            <button name="btnQuestao2" value="ruim">Ruim!</button>
            <button name="btnQuestao2" value="bom">Bom!</button>
            <button name="btnQuestao2" value="otimo">Ótimo!</button>

        </form>
    </body>
</html>