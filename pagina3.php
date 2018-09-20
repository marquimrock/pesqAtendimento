<?php
session_start();
include_once './conexaoFirebird.php';
$questao2 = $_GET["questao2"];
switch ($questao2) {
    case 1:
        $_SESSION["questao2"] = "ruim";
        break;
    case 2:
         $_SESSION["questao2"] = "bom";
        break;
    case 3:
         $_SESSION["questao2"] = "otimo";
        break;
}
$_SESSION["vendedor"] = selectComanda($_SESSION["comanda"]);
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <!-- shrink-to-fit=no define se a pagina deve aplicar zoom na tela. Está com layout estatico -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Pesquisa de Satisfação do Cliente</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/estilo.css"/>

        <!-- <link rel="stylesheet" href="assets/css/estilo.css"/> -->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

        <script type="text/javascript">
            function tecla_pressionada(x) {
                var tecla = x.which;
                if (tecla == 49) {
                    window.location.href = "http://192.168.0.104/pesqAtendimento/result.php?questao3=1";
                }
                if (tecla == 50) {
                    window.location.href = "http://192.168.0.104/pesqAtendimento/result.php?questao3=2";
                }
                if (tecla == 51) {
                    window.location.href = "http://192.168.0.104/pesqAtendimento/result.php?questao3=3";
                }
            }
        </script>
    </head>
    <body>
        <div class="container-fluid" align="center"><br>
          <img src="logo.png" width="150" height="97" align="left">
          <div class="well well-md" align="center" >
              <h3><b><i>PESQUISA DE SATISFAÇÃO DO CLIENTE</i></b></h3>
          </div>
            <div class="panel panel-default" id="votacao" style="height:274px;">
                <div class="panel-body">
                    <form class="form-inline" name="frmQuestao3" method="post" action="result.php">
                        <label name="lblComanda"><h4><b>N. da comanda:</b></h4></label><br>
                        <input type="text" class="form-control" name="comanda" value="<?php echo $_SESSION["comanda"] ?>" readonly="true"> <br><br>

                        <div class="panel panel-default" id="votacao" style="background-color: #FFEBCD; height:142px;">
                            <div class="panel-body">
                                <label name="lblQuestao3" id="lbVotacao"><h4><i>3/3. Como você avalia a qualidade das refeições?</i></h4></label><br>
                                <div id="botoes" onkeypress="tecla_pressionada(event)" class="form-group col-md-11">
                                    <button name="btn0pag3" id="btn0pag3" type="button" class="btn" value="1" style="background-color: #FFEBCD;" autofocus><img src="seta.png"></button>
                                    <button name="bnt1pag3" id="bnt1pag3" type="button" class="btn btn-danger" value="1" onclick="location.href= 'http://192.168.0.104/pesqAtendimento/result.php?questao3=1' "><b>Ruim!</b></button>
                                    <button name="btn2pag3" id="btn2pag3" type="button" class="btn btn-warning" value="2" onclick="location.href= 'http://192.168.0.104/pesqAtendimento/result.php?questao3=2' "><b>Bom!</b></button>
                                    <button name="btn3pag3" id="btn3pag3" type="button" class="btn btn-success" value="3" onclick="location.href= 'http://192.168.0.104/pesqAtendimento/result.php?questao3=3' "><b>Ótimo!</b></button>
                                </div>
                                <div id="botoes" onkeypress="tecla_pressionada(event)" class="form-group col-md-1">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
