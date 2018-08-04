<?php
session_start();
$_SESSION["comanda"] = $_POST['comanda'];
$_SESSION["questao2"] = $_POST['btnQuestao2'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="frmQuestao3" method="post" action="result.php">
            <label name="lblComanda">comanda</label><br>
            <input type="text" name="comanda" value="<?php echo $_SESSION["comanda"] ?>" readonly="true"> <br>
            <label name="lblQuestao3">Como você avalia a qualidade das refeições?</label><br>
            <button name="btnQuestao3" value="ruim">Ruim!</button>
            <button name="btnQuestao3" value="bom">Bom!</button>
            <button name="btnQuestao3" value="otimo">Ótimo!</button>

        </form>
    </body>
</html>