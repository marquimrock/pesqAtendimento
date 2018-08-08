<?php
header("refresh: 5;index.php");
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
                <label name="lblComanda"><h2><b>Agradecemos sua Opinião!!</b></h2></label><br>
                <label name="lblComanda"><h2><b>Volte Sempre!!</b></h2></label><br>
            </form>
        </div>
        <script src="assets/js/jquery-3.3.1.js"/>
        <script src="assets/js/bootstrap.js"/>
    </body>
</html>
