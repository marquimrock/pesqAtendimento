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
                     window.location.href = "http://localhost/pesqAtendimento/pagina3.php?questao2=1";           
                }
                if (tecla == 50) {
                    window.location.href = "http://localhost/pesqAtendimento/pagina3.php?questao2=2";           
                }
                if (tecla == 51) {
                    window.location.href = "http://localhost/pesqAtendimento/pagina3.php?questao2=3";           
                }
            }
        </script>
    </head>
    <body>

        <div class="container-fluid" align="center"><br>
          <div class="panel panel-default" style="background-color: #FFFFCC;" >
              <div class="panel-body">
                  <img src="logo.png" width="255" height="187">
                  <form class="form-inline" name="frmQuestao2" method="post" action="pagina3.php">
                      <label name="lblComanda"><h2><b>Comanda</b></h2></label><br>
                      <input type="text" class="form-control" name="comanda" value="<?php echo $_SESSION["comanda"];?>" readonly="true"> <br><br>
                      <label name="lblQuestao2"><h4>2/3. Como você avalia o nosso atendimento?</h4></label><br>
                      <div id="botoes" onkeypress="tecla_pressionada(event)" >
                          <button name="btn1pag2" id="btn1pag2" type="button" class="btn btn-danger" value="1" onclick="location.href= 'http://localhost/pesqAtendimento/pagina3.php?questao2=1' "><b>Ruim!</b></button>
                          <button name="btn2pag2" id="btn2pag2" type="button" class="btn btn-warning" value="2" onclick="location.href= 'http://localhost/pesqAtendimento/pagina3.php?questao2=2' "><b>Bom!</b></button>
                          <button name="btn3pag2" id="btn3pag2" type="button" class="btn btn-success" value="3" onclick="location.href= 'http://localhost/pesqAtendimento/pagina3.php?questao2=3' "><b>Ótimo!</b></button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>