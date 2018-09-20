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
        <link rel="stylesheet" href="assets/css/estilo.css"/>

        <!-- <link rel="stylesheet" href="assets/css/estilo.css"/> -->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

        <script>
            function somenteNumeros(num) {
                var er = /[^0-9.]/;
                er.lastIndex = 0;
                var campo = num;
                if (er.test(campo.value)) {
                    campo.value = "";
                }
            }
            function valida_form() {
                if (document.getElementById("comanda").value.length < 8) {
                    alert('Por favor, digite o numero da comanda com 8 dígitos!');
                    focus.comanda;
                    return false;
                } else {
                    document.frmIndex.submit();
                  }
            }
            function enableDiv() {
                document.getElementById("frmIndex").submit();
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
                    <form id="frmIndex" class="form-inline" name="frmIndex" method="post" action="pagina1.php" onsubmit="return valida_form(this)">
                        <!-- <img src="logo.png" width="255" height="187"> --> <br>
                        <label name="lblComanda"><h4><b>Informe sua comanda:</b></h4></label><br>
                        <input type="text" class="form-control" name="comanda" id="comanda" onkeyup="if (this.value.length >= 8) {
                                    enableDiv();
                                }"  maxlength="8" autofocus="true"><br>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
