<?php
include 'conexaoFirebird.php';
include 'contagem.php';

$contagem = new contagem();

$query = ibase_query($dbh, $sql);
$query2 = ibase_query($dbh, $sql2);

date_default_timezone_set('America/Sao_Paulo');
$dateBr = date('d-m-Y');
$date = date('Y-m-d');
?>

<html  lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <!-- shrink-to-fit=no define se a pagina deve aplicar zoom na tela. Está com layout estatico -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Relátorios</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/estilo.css"/>
        <!-- <link rel="stylesheet" href="assets/css/estilo.css"/> -->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#dataInicial").datepicker({
                    dateFormat: 'dd/mm/yy',
                    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
                });
            });
            $(function () {
                $("#dataFinal").datepicker({
                    dateFormat: 'dd/mm/yy',
                    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
                });
            });

        </script>
    </head>
    <body>
        <form name="frmRel" method="post" action="relatorio.php">
            <br>
            <div class="container-fluid">
              <img src="logo.png" width="150" height="97" align="left">
              <div class="well well-md" align="center" >
                  <h3><b><i>RELATÓRIO DE SATISFAÇÃO DO CLIENTE</i></b></h3>
              </div>
                <div class="row content">
                    <div class="col-sm-12 text-left">
                        <div class="panel panel-default" id="filtroRelatorio">
                            <div class="panel-body" >
                                <!-- PRIMEIRA LINHA FF9966-->
                                <div class="form-group col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label name="lblVendedor" id="lblVendedor">Vendedor</label>
                                            <select name="vendedor" class="form-control">
                                                <option value="<?php if(empty($_POST['vendedor'])){ $_POST['vendedor'] = 'null';} else { echo $_POST['vendedor']; } ?>">
                                                  <?php if($_POST['vendedor'] === 'null'){ echo "Selecione.."; } else { echo $_POST['vendedor']; } ?>
                                                </option>
                                                <?php
                                                while ($row = ibase_fetch_object($query2)) {
                                                    //imprimi as linhas na tela
                                                    echo "<option value='" . $row->S_NOME . "'>" . $row->S_NOME . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblQuestao1" id="lblQuestao1">Ambiente</label>
                                            <select name="questao1" class="form-control">
                                                <option value="<?php if(empty($_POST['questao1'])){ $_POST['questao1'] = 'null';} else { echo $_POST['questao1']; } ?>">
                                                    <?php if($_POST['questao1'] === 'null'){ echo "Selecione.."; } else { echo $_POST['questao1']; } ?>
                                                </option>
                                                <option value="ruim">Ruim!</option>
                                                <option value="bom">Bom!</option>
                                                <option value="otimo">Otimo!</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblQuestao2" id="lblQuestao2">Atendimento</label>
                                            <select name="questao2" class="form-control">
                                                <option value="<?php if(empty($_POST['questao2'])){ $_POST['questao2'] = 'null';} else { echo $_POST['questao2']; } ?>">
                                                  <?php if($_POST['questao2'] === 'null'){ echo "Selecione.."; } else { echo $_POST['questao2']; } ?>
                                                </option>
                                                <option value="ruim">Ruim</option>
                                                <option value="bom">Bom</option>
                                                <option value="otimo">Otimo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblQuestao3" id="lblQuestao3">Refeições</label>
                                            <select name="questao3" class="form-control">
                                                <option value="<?php if(empty($_POST['questao3'])){ $_POST['questao3'] = 'null';} else { echo $_POST['questao3']; } ?>">
                                                  <?php if($_POST['questao3'] === 'null'){ echo "Selecione.."; } else { echo $_POST['questao3']; } ?>
                                                </option>
                                                <option value="ruim">Ruim</option>
                                                <option value="bom">Bom</option>
                                                <option value="otimo">Otimo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblDataInicial" id="lblDataInicial">Data Inicial:</label>
                                            <input type="text" id="dataInicial" name="dataInicial" class="form-control" value="<?php if(!empty($_POST['dataInicial'])){ echo $_POST['dataInicial']; } ?>"/>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblDataFinal" id="lblDataFinal">Data Final:</label>
                                            <input type="text" id="dataFinal" name="dataFinal" class="form-control" value="<?php if(!empty($_POST['dataFinal'])){ echo $_POST['dataFinal']; } ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <!-- SEGUNDA LINHA -->
                                <div class="form-group col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <!-- PESQUISAR -->
                                            <button type="submit" class="btn btn-default" value="pesquisar" id="btnPesquisa">
                                              <b><i>Pesquisar</i></b>
                                            </button><br><br>
                                            <a href="relatorio.php"><u>Limpar campos</u></a>
                                        </div>

                                        <?php
                                            //include 'contagem.php';
                                            //include 'pesquisa.php';
                                            include 'conexao.php';
                                            $sql = "SELECT * FROM pesquisa WHERE '1' = '1' ";
                                            if (isset($_POST['vendedor'])) {
                                                if ($_POST['vendedor'] !== 'null') {
                                                    $vendedor = $_POST['vendedor'];
                                                    $sql = $sql . " AND vendedor = '$vendedor' ";
                                                }
                                                if ($_POST['questao1'] !== 'null') {
                                                    $questao1 = $_POST['questao1'];
                                                    $sql = $sql . " AND questao1 = '$questao1' ";
                                                }
                                                if ($_POST['questao2'] !== 'null') {
                                                    $questao2 = $_POST['questao2'];
                                                    $sql = $sql . " AND questao2 = '$questao2' ";
                                                }
                                                if ($_POST['questao3'] !== 'null') {
                                                    $questao3 = $_POST['questao3'];
                                                    $sql = $sql . " AND questao3 = '$questao3' ";
                                                }

                                                $dtInicial;
                                                if(empty($_POST['dataInicial'])){
                                                    $dtInicial = "";
                                                } else {
                                                    $dtInicial = $_POST['dataInicial'];
                                                }

                                                $dtFinal;
                                                if(empty($_POST['dataFinal'])){
                                                    $dtFinal = "";
                                                } else {
                                                    $dtInicial = $_POST['dataFinal'];
                                                }

                                                $dataInicial = implode("-",array_reverse(explode("/",$dtInicial)));
                                                $dataFinal = implode("-",array_reverse(explode("/",$dtInicial)));
                                                if(empty($dataFinal)){
                                                    $dataFinal = date('Y-m-d');
                                                    if (!empty($dataInicial) || !empty($dataFinal)) {
                                                        $sql = $sql . " AND data between '$dataInicial' AND '$dataFinal' order by data ";
                                                    }
                                                } else {
                                                    if (!empty($dataInicial) || !empty($dataFinal)) {
                                                        $sql = $sql . " AND data between '$dataInicial' AND '$dataFinal' order by data ";
                                                    }
                                                }

                                                $ruimQst1 = 0;
                                                $bomQst1 = 0;
                                                $otimoQst1 = 0;
                                                $ruimQst2 = 0;
                                                $bomQst2 = 0;
                                                $otimoQst2 = 0;
                                                $ruimQst3 = 0;
                                                $bomQst3 = 0;
                                                $otimoQst3 = 0;

                                                $contagem = new contagem();
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    // output data of each
                                                    while ($row = $result->fetch_assoc()) {
                                                        switch ($row["questao1"]) {
                                                          case 'ruim':
                                                            $ruimQst1++;
                                                            $contagem->setLbRuimQst1($ruimQst1);
                                                            break;
                                                          case 'bom':
                                                            $bomQst1++;
                                                            $contagem->setLbBomQst1($bomQst1);
                                                            break;
                                                          case 'otimo':
                                                            $otimoQst1++;
                                                            $contagem->setLbOtimoQst1($otimoQst1);
                                                            break;
                                                        }

                                                        switch ($row["questao2"]) {
                                                          case 'ruim':
                                                            $ruimQst2++;
                                                            $contagem->setLbRuimQst2($ruimQst2);
                                                            break;
                                                          case 'bom':
                                                            $bomQst2++;
                                                            $contagem->setLbBomQst2($bomQst2);
                                                            break;
                                                          case 'otimo':
                                                            $otimoQst2++;
                                                            $contagem->setLbOtimoQst2($otimoQst2);
                                                            break;
                                                        }

                                                        switch ($row["questao3"]) {
                                                          case 'ruim':
                                                            $ruimQst3++;
                                                            $contagem->setLbRuimQst3($ruimQst3);
                                                            break;
                                                          case 'bom':
                                                            $bomQst3++;
                                                            $contagem->setLbBomQst3($bomQst3);
                                                            break;
                                                          case 'otimo':
                                                            $otimoQst3++;
                                                            $contagem->setLbOtimoQst3($otimoQst3);
                                                            break;
                                                        }
                                                    }
                                                    $ruim1 = $contagem->getLbRuimQst1();
                                                    $bom1 = $contagem->getLbBomQst1();
                                                    $otimo1 = $contagem->getLbOtimoQst1();

                                                    $contagem->setPercRuim1(number_format(($ruim1 * 100)/($ruim1 + $bom1 + $otimo1)),2);
                                                    $contagem->setPercBom1(number_format(($bom1 * 100)/($ruim1 + $bom1 + $otimo1)),2);
                                                    $contagem->setPercOtimo1(number_format(($otimo1 * 100)/($ruim1 + $bom1 + $otimo1)),2);

                                                    $ruim2 = $contagem->getLbRuimQst2();
                                                    $bom2 = $contagem->getLbBomQst2();
                                                    $otimo2 = $contagem->getLbOtimoQst2();

                                                    $contagem->setPercRuim2(number_format(($ruim2 * 100)/($ruim2 + $bom2 + $otimo2)),2);
                                                    $contagem->setPercBom2(number_format(($bom2 * 100)/($ruim2 + $bom2 + $otimo2)),2);
                                                    $contagem->setPercOtimo2(number_format(($otimo2 * 100)/($ruim2 + $bom2 + $otimo2)),2);

                                                    $ruim3 = $contagem->getLbRuimQst3();
                                                    $bom3 = $contagem->getLbBomQst3();
                                                    $otimo3 = $contagem->getLbOtimoQst3();

                                                    $contagem->setPercRuim3(number_format(($ruim3 * 100)/($ruim3 + $bom3 + $otimo3)),2);
                                                    $contagem->setPercBom3(number_format(($bom3 * 100)/($ruim3 + $bom3 + $otimo3)),2);
                                                    $contagem->setPercOtimo3(number_format(($otimo3 * 100)/($ruim3 + $bom3 + $otimo3)),2);
                                                }
                                            }
                                        ?>
                                        <div class="form-group col-md-2">
                                          <form class="form-horizontal">
                                            Ruim:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #FFCCFF; border-color: #FFCCFF; height:30px; width:<?php echo $contagem->getPercRuim1().'%' ?>;">
                                              <?php echo $contagem->getPercRuim1().'%' ?>
                                            </label>
                                            Bom:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #FFFF00; border-color: #FFFF00; height:30px; width:<?php echo $contagem->getPercBom1().'%' ?>;">
                                              <?php echo $contagem->getPercBom1().'%' ?>
                                            </label>
                                            Otimo:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #7CFC00; border-color: #7CFC00; height:30px; width:<?php echo $contagem->getPercOtimo1().'%' ?>;">
                                              <?php echo $contagem->getPercOtimo1().'%' ?>
                                            </label>
                                          </form>
                                        </div>

                                        <div class="form-group col-md-2">
                                          <form class="form-horizontal">
                                            Ruim:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #FFCCFF; border-color: #FFCCFF; height:30px; width:<?php echo $contagem->getPercRuim2().'%' ?>;">
                                              <?php echo $contagem->getPercRuim2().'%' ?>
                                            </label>
                                            Bom:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #FFFF00; border-color: #FFFF00; height:30px; width:<?php echo $contagem->getPercBom2().'%' ?>;">
                                              <?php echo $contagem->getPercBom2().'%' ?>
                                            </label>
                                            Otimo:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #7CFC00; border-color: #7CFC00; height:30px; width:<?php echo $contagem->getPercOtimo2().'%' ?>;">
                                              <?php echo $contagem->getPercOtimo2().'%' ?>
                                            </label>
                                          </form>
                                        </div>

                                        <div class="form-group col-md-2">
                                          <form class="form-horizontal">
                                            Ruim:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #FFCCFF; border-color: #FFCCFF; height:30px; width:<?php echo $contagem->getPercRuim3().'%' ?>;">
                                              <?php echo $contagem->getPercRuim3().'%' ?>
                                            </label>
                                            Bom:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #FFFF00; border-color: #FFFF00; height:30px; width:<?php echo $contagem->getPercBom3().'%' ?>;">
                                              <?php echo $contagem->getPercBom3().'%' ?>
                                            </label>
                                            Otimo:
                                            <label for="disabledInput" class="form-control control-label" style="background-color: #7CFC00; border-color: #7CFC00; height:30px; width:<?php echo $contagem->getPercOtimo3().'%' ?>;">
                                              <?php echo $contagem->getPercOtimo3().'%' ?>
                                            </label>
                                          </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-12 text-left">
                    <div class="panel panel-default" id="relatorio">
                        <div class="panel-body">
                            <table  class="table table-striped" width="100%">
                                <tr id=trRelatorio>
                                    <td align="center"><b>Comanda</b></th>
                                    <td align="center"><b>Vendedor(a)</b></th>
                                    <td align="center"><b>Ambiente</b></th>
                                    <td align="center"><b>Atendimento</b></th>
                                    <td align="center"><b>Refeições</b></th>
                                    <td align="center"><b>Data</b></th>
                                    <td align="center"><b>Hora</b></th>
                                </tr>
                                <tbody>
                                    <?php
                                    include 'pesquisa.php';
                                    include 'conexao.php';
                                    $sql = "SELECT * FROM pesquisa WHERE '1' = '1' ";
                                    if (isset($_POST['vendedor'])) {
                                        if ($_POST['vendedor'] !== 'null') {
                                            $vendedor = $_POST['vendedor'];
                                            $sql = $sql . " AND vendedor = '$vendedor' ";
                                        }
                                        if ($_POST['questao1'] !== 'null') {
                                            $questao1 = $_POST['questao1'];
                                            $sql = $sql . " AND questao1 = '$questao1' ";
                                        }
                                        if ($_POST['questao2'] !== 'null') {
                                            $questao2 = $_POST['questao2'];
                                            $sql = $sql . " AND questao2 = '$questao2' ";
                                        }
                                        if ($_POST['questao3'] !== 'null') {
                                            $questao3 = $_POST['questao3'];
                                            $sql = $sql . " AND questao3 = '$questao3' ";
                                        }

                                        $dtInicial;
                                        if(empty($_POST['dataInicial'])){
                                            $dtInicial = "";
                                        } else {
                                            $dtInicial = $_POST['dataInicial'];
                                        }

                                        $dtFinal;
                                        if(empty($_POST['dataFinal'])){
                                            $dtFinal = "";
                                        } else {
                                            $dtInicial = $_POST['dataFinal'];
                                        }

                                        $dataInicial = implode("-",array_reverse(explode("/",$dtInicial)));
                                        $dataFinal = implode("-",array_reverse(explode("/",$dtInicial)));
                                        if(empty($dataFinal)){
                                            $dataFinal = date('Y-m-d');
                                            if (!empty($dataInicial) || !empty($dataFinal)) {
                                                $sql = $sql . " AND data between '$dataInicial' AND '$dataFinal' order by data ";
                                            }
                                        } else {
                                            if (!empty($dataInicial) || !empty($dataFinal)) {
                                                $sql = $sql . " AND data between '$dataInicial' AND '$dataFinal' order by data ";
                                            }
                                        }

                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr>';
                                                echo '<td align="center">' . $row["comanda"] . '</td>';
                                                echo '<td align="center">' . $row["vendedor"] . '</td>';
                                                echo '<td align="center">' . $row["questao1"] . '</td>';
                                                echo '<td align="center">' . $row["questao2"] . '</td>';
                                                echo '<td align="center">' . $row["questao3"] . '</td>';

                                                $data = implode("/",array_reverse(explode("-",$row["data"])));
                                                echo '<td align="center">' . $data . '</td>';
                                                echo '<td align="center">' . $row["hora"] . '</td>';
                                                echo '</tr>';
                                            }
                                        } else {
                                            echo "Nenhum resultado encontrado!";
                                        }
                                    }
                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
                            <!-- PAGINAÇÃO
                            <nav aria-label="Page navigation" align="center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                          -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
