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
        <style>
            div.panel {
              border-color: #FFCC00;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" align="center"><br>
          <div class="panel panel-default" style="background-color: #FFFFCC;" >
              <div class="panel-body">
                  <img src="logo.png" width="255" height="187">
                  <form id="frmQuestao1" class="form-inline" name="frmQuestao1" method="post" action="pagina2.php">
                    <br>
                      <label name="lblComanda"><h2><b>Agradecemos a sua participação!</b></h2></label><br>
                      <label name="lblComanda"><h2><b>Volte Sempre!</b></h2></label><br>
                  </form>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
