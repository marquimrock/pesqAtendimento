<?php
session_start();
$questao1 = $_GET["questao1"];
switch ($questao1) {
    case '1':
        $_SESSION["questao1"] = "ruim";
        break;
    case '2':
        $_SESSION["questao1"] = "bom";
        break;
    case '3':
        $_SESSION["questao1"] = "otimo";
        break;
}
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
                    window.location.href = "pagina3.php?questao2=1";
                }
                if (tecla == 50) {
                    window.location.href = "pagina3.php?questao2=2";
                }
                if (tecla == 51) {
                    window.location.href = "pagina3.php?questao2=3";
                }
            }
        </script>
    </head>
    <body>
        <div class="container-fluid" align="center"><br>
          <div class="well well-sm" style="height: 80px;">
              <h3><b><i>PESQUISA DE SATISFAÇÃO DO CLIENTE</i></b></h3>
          </div>

            <div class="panel panel-default" id="votacao" style="height:335px;">
                <div class="panel-body">
                    <form class="form-inline" name="frmQuestao2" method="post" action="pagina3.php">
                        <img src="logo.png" width="150" height="97" align="left">
                        <label name="lblComanda"><h2><b>N. da comanda:</b></h2></label><br>
                        <input type="text" class="form-control" name="comanda" id="comanda" value="<?php echo $_SESSION["comanda"]; ?>" readonly="true"> <br><br>

                        <div class="panel panel-default" id="votacao" style="background-color: #FFEBCD; height:175px;">
                            <div class="panel-body">

                                <button name="btn0pag2" id="btn0pag2" type="button" class="btn" value="1" style="background-color: #FFEBCD;" autofocus><img src="seta.png"></button>
                                <label name="lblQuestao2" id="lbVotacao"><h3><i>2/3. Como você avalia o tempo de espera do atendimento?</i></h3></label>
                                <br><br>
                                <div id="botoes" onkeypress="tecla_pressionada(event)" class="form-group col-md-5" align="right">
                                    <button name="btn1pag2" id="btn1pag2" type="button" class="btn btn-danger" value="1" style="width: 120px; height: 54x;" onclick="location.href = 'pagina3.php?questao2=1'">
                                      <h4><b>Ruim!</b></h4>
                                    </button>
                                </div>
                                <div id="botoes" onkeypress="tecla_pressionada(event)" class="form-group col-md-2">
                                    <button name="btn2pag2" id="btn2pag2" type="button" class="btn btn-warning" value="2" style="width: 120px; height: 54x;" onclick="location.href = 'pagina3.php?questao2=2'">
                                      <h4><b>Bom!</b></h4>
                                    </button>
                                </div>
                                <div id="botoes" onkeypress="tecla_pressionada(event)" class="form-group col-md-5" align="left">
                                    <button name="btn3pag2" id="btn3pag2" type="button" class="btn btn-success" value="3" style="width: 120px; height: 54x;" onclick="location.href = 'pagina3.php?questao2=3'">
                                      <h4><b>Ótimo!</b></h4>
                                    </button>
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
