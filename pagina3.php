<?php
/*
session_start();
$_SESSION["comanda"] = $_POST['comanda'];
$_SESSION["questao2"] = $_POST['btnQuestao2'];
*/
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pesquisa de Satisfação do Cliente</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    </head>
    <body>
        <div class="container-fluid" style="background-color: #FFFFCC;" align="center">
            <img src="logo.png" width="255" height="187">
            <form class="form-inline" name="frmQuestao3" method="post" action="result.php">
                <label name="lblComanda"><h2><b>Comanda</b></h2></label><br>
                <input type="text" class="form-control" name="comanda" value="<?php //echo $_SESSION["comanda"] ?>" readonly="true"> <br><br>
                <label name="lblQuestao3"><h4>3/3. Como você avalia a qualidade das refeições?</h4></label><br>
                <button name="btnQuestao3" type="button" class="btn btn-danger" value="ruim"><b>Ruim!</b></button>
                <button name="btnQuestao3" type="button" class="btn btn-warning" value="bom"><b>Bom!</b></button>
                <button name="btnQuestao3" type="button" class="btn btn-success" value="otimo"><b>Ótimo!</b></button>

            </form>
        </div>
        <script src="assets/js/jquery-3.3.1.js"/>
        <script src="assets/js/bootstrap.js"
    </body>
</html>
