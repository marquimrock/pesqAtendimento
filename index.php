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
            function pesquisa() {
              <!-- width -> largura da janela, height -> altura da janela, top e lef -> definem a posição que a janela vai abrir
              window.open('pagina0.php','pesquisa','width=850px, height=430px, left=300px, top=200px')
              //-->
            }
        </script>
    </head>
    <body>
        <div class="container-fluid" align="center"><br>
          <img src="logo.png" width="150" height="97" align="left">
          <div class="well well-md" align="center" >
              <h3><b><i>PESQUISA DE SATISFAÇÃO DO CLIENTE</i></b></h3>
          </div>
            <div class="panel panel-default" id="votacao">
                <div class="panel-body">
                    <form id="frmIndex">
                        <!-- <img src="logo.png" width="255" height="187"> --> <br>
                        <a href="javascript:pesquisa()">
                          <button type="button" class="btn btn-danger"><b><h4>Iniciar Pesquisa</h4></b></button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
