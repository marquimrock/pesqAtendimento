<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <!-- shrink-to-fit=no define se a pagina deve aplicar zoom na tela. Está com layout estatico -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Pesquisa de Satisfação do Cliente</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/estilo.css"/>
        <script>
            /*
            function pesquisa() {
              <!-- width -> largura da janela, height -> altura da janela, top e lef -> definem a posição que a janela vai abrir
              window.open('pagina0.php','pesquisa','width=850px, height=475px, left=300px, top=200px')
              //-->
            }*/
            setTimeout(function() {
                window.location.href = "http://192.168.0.104/pesqAtendimento/pagina0.php";
            }, 5000);
        </script>
    </head>
    <body>
        <div class="container-fluid" align="center"><br>
          <div class="panel panel-default" id="votacao">
              <div class="panel-body">
                  <img src="logo.png" width="255" height="187">
                  <form id="frmQuestao1" class="form-inline">
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
