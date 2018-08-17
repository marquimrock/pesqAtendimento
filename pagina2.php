<?php

include './conexaoFirebird.php';

session_start();
$_SESSION["comanda"] = $_POST['comanda'];
$_SESSION["questao1"] = $_POST['btn2'];
//echo $_POST['comanda'];
var_dump($_SESSION);
$_SESSION["vendedor"] = selectComanda($_POST['comanda']);

?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pesquisa de Satisfação do Cliente</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/estilo.css"/>
    </head>
    <body>

        <div class="container-fluid" align="center"><br>
          <div class="panel panel-default" style="background-color: #FFFFCC;" >
              <div class="panel-body">
                  <img src="logo.png" width="255" height="187">
                  <form class="form-inline" name="frmQuestao2" method="post" action="pagina3.php">
                      <label name="lblComanda"><h2><b>Comanda</b></h2></label><br>
                      <input type="text" class="form-control" name="comanda" value="<?php echo $_SESSION["comanda"] ?>" readonly="true"> <br><br>
                      <label name="lblQuestao2"><h4>2/3. Como você avalia o nosso atendimento?</h4></label><br>
                      <button name="btnQuestao2" type="submit" class="btn btn-danger" value="ruim"><b>Ruim!</b></button>
                      <button name="btnQuestao2" type="submit" class="btn btn-warning" value="bom"><b>Bom!</b></button>
                      <button name="btnQuestao2" type="submit" class="btn btn-success" value="otimo"><b>Ótimo!</b></button>

                  </form>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
