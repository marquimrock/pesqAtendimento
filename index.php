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
            return false
            }
            focus.comanda;
            }
            function enableDiv() {
            document.getElementById("btnQuestao1").disabled = false;
            document.getElementById("btnQuestao2").disabled = false;
            document.getElementById("btnQuestao3").disabled = false;
            document.getElementById("btnHidden").focus();
            }
            function disableDiv() {
            document.getElementById("btnQuestao1").disabled = true;
            document.getElementById("btnQuestao2").disabled = true;
            document.getElementById("btnQuestao3").disabled = true;
            }
            function tecla_pressionada(x) {
            var tecla = x.which;
            if (tecla == 50){
            alert("bom");
            }
            if (tecla == 51){
            alert("otimo");
            }
            return tecla;
            }
        </script>
    </head>
    <body onload="disableDiv()">
        <div class="container-fluid" align="center"><br>
            <div class="panel panel-default" style="background-color: #FFFFCC;" >
                <div class="panel-body">
                    <form id="frmQuestao1" class="form-inline" name="frmQuestao1" method="post" action="pagina2.php" onsubmit="return valida_form(this)">
                        <img src="logo.png" width="255" height="187"><br>
                        <label name="lblComanda"><h2><b>Comanda</b></h2></label><br>
                        <input type="text" class="form-control" name="comanda" id="comanda" onkeyup="if (this.value.length >= 8) {
                            enableDiv();
                            }" onkeyup="somenteNumeros(this);" maxlength="8" autofocus="true"><br>

                        <label name="lblQuestao1"><h4>1/3. Como você avalia o tempo de espera do atendimento?</h4></label><br>
                        <div id="botoes" onkeydown="tecla_pressionada(event)">
                            <button name="btnQuestao1" id="btn1" type="submit" class="btn btn-danger" value="ruim" onkeypress="this.form.submit();"><b>Ruim!</b></button>
                            <button name="btnQuestao1" id="btn2" type="submit" class="btn btn-warning" value="bom" onkeypress=" if (event.key == 50) { this.form.submit(); }"><b>Bom!</b></button>
                            <button name="btnQuestao1" id="bnt3" type="submit" class="btn btn-success" value="otimo" onkeypress=" if (event.key == 51) { this.form.submit();"}><b>Ótimo!</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
