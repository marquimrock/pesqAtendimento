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
                    document.getElementById("comanda").focus();
                    return false
                }
            }
        </script>
    </head>
    <body>

        <div class="container-fluid" align="center"><br>
          <div class="panel panel-default" style="background-color: #FFFFCC;" >
              <div class="panel-body">

                  <img src="logo.png" width="255" height="187">
                  <form id="frmQuestao1" class="form-inline" name="frmQuestao1" method="post" action="pagina2.php" onsubmit="return valida_form(this)">
                      <label name="lblComanda"><h2><b>Comanda</b></h2></label><br>
                      <input type="text" class="form-control" name="comanda" id="comanda" onkeyup="somenteNumeros(this);" maxlength="8    "><br><br>
                      <label name="lblQuestao1"><h4>1/3. Como você avalia o tempo de espera do atendimento?</h4></label><br>
                      <button name="btnQuestao1" type="submit" class="btn btn-danger" value="ruim"><b>Ruim!</b></button>
                      <button name="btnQuestao1" type="submit" class="btn btn-warning" value="bom"><b>Bom!</b></button>
                      <button name="btnQuestao1" type="submit" class="btn btn-success" value="otimo"><b>Ótimo!</b></button>
                  </form>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
