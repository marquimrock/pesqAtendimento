<?php
session_start();
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <!-- shrink-to-fit=no define se a pagina deve aplicar zoom na tela. Está com layout estatico -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Pesquisa de Satisfação do Cliente</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    </head>
    <body>
        <div class="container-fluid" style="background-color: #FFFFCC;" align="center">
            <img src="logo.png" width="255" height="187">
            <form id="frmQuestao1" class="form-inline" name="frmQuestao1" method="post" action="pagina2.php">
                <label name="lblComanda"><h2><b>Comanda</b></h2></label><br>
                <input type="text" class="form-control" name="comanda" id="comanda"><br><br>
                <label name="lblQuestao1"><h4>1/3. Como você avalia o tempo de espera do atendimento?</h4></label><br>
                <button name="btnQuestao1" type="submit" class="btn btn-danger" value="ruim"><b>Ruim!</b></button>
                <button name="btnQuestao1" type="submit" class="btn btn-warning" value="bom"><b>Bom!</b></button>
                <button name="btnQuestao1" type="submit" class="btn btn-success" value="otimo"><b>Ótimo!</b></button>
            </form>
            <input type="submit" name="Proximo" type="button" class="btn" value="Relatorio" onClick="javascript:window.location.href = 'relatorio.php'">
        </div>
        <script src="assets/js/jquery-3.3.1.js"/>
        <script src="assets/js/bootstrap.js"
    </body>
</html>
