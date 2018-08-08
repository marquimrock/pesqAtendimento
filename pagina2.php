<?php
<<<<<<< HEAD

=======
>>>>>>> d44f31438ceeb71288d5f1ded294351ac666d5b1
include './conexaoFirebird.php';

session_start();
$_SESSION["comanda"] = $_POST['comanda'];
$_SESSION["questao1"] = $_POST['btnQuestao1'];
$_SESSION["vendedor"] = selectComanda($_POST['comanda']);
<<<<<<< HEAD

=======
>>>>>>> d44f31438ceeb71288d5f1ded294351ac666d5b1
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pesquisa de Satisfação do Cliente</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    </head>
    <body>
        <div class="container-fluid" style="background-color: #FFFFCC;" align="center">
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
        <script src="assets/js/jquery-3.3.1.js"/>
        <script src="assets/js/bootstrap.js"/>
    </body>
</html>
