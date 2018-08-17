<?php
session_start();
$_SESSION["comanda"] = $_POST['comanda'];
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


        <script>
            function tecla_pressionada(x) {
                var tecla = x.keyCode;
                if (tecla == 49) {
                    alert("ruim");
                    var teste = document.getElementById("btn2").getAttribute(id);
                    alert (teste);
                    
                }
                if (tecla == 50) {
                    document.getElementById("btn2").focus();
                    document.getElementById("frmQuestao1").submit();
                    
                }
                if (tecla == 51) {
                    alert("otimo").value();
                }
                this.form.submit();
                return tecla;
            }
        </script>
    </head>
    <body onload="disableDiv()">
        <div class="container-fluid" align="center"><br>
            <div class="panel panel-default" style="background-color: #FFFFCC;" >
                <div class="panel-body">
                    <form id="frmQuestao1" class="form-inline" name="frmQuestao1" method="post" action="pagina2.php">
                        <img src="logo.png" width="255" height="187"><br>
                        <label name="lblComanda"><h2><b>Comanda</b></h2></label><br>
                        <input type="text" class="form-control" name="comanda" id="comanda" maxlength="8" autofocus="true" value="<?php echo $_SESSION["comanda"] ?>" readonly="true"><br>
                        <label name="lblQuestao1"><h4>1/3. Como você avalia o tempo de espera do atendimento?</h4></label><br>
                        <div id="botoes" onkeypress="tecla_pressionada(event)" >
                            <button name="btn1" id="btn1" type="button" class="btn btn-danger" value="ruim"><b>Ruim!</b></button>
                            <button name="btn2" id="btn2" type="button" class="btn btn-warning" value=" (return tecla_pressionada(x)})"><b>Bom!</b></button>
                            <button name="btn3" id="btn3" type="button" class="btn btn-success" value="otimo"><b>Ótimo!</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
