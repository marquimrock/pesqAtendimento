<?php
include './conexaoFirebird.php';
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
        </script>
        <script>
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
                  <h3><b><i>RELATORIO DE SATISFAÇÃO DO CLIENTE</i></b></h3>
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
                                                <option value=null >Selecione..</option>
                                                <?php
                                                while ($row = ibase_fetch_object($query2)) {
                                                    //imprimi as linhas na tela
                                                    echo "<option value='" . $row->S_NOME . "'>" . $row->S_NOME . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblQuestao1" id="lblQuestao1">Sobre o ambiente</label>
                                            <select name="questao1" class="form-control">
                                                <option value=null>Selecione..</option>
                                                <option value="ruim">Ruim!</option>
                                                <option value="bom">Bom!</option>
                                                <option value="otimo">Otimo!</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblQuestao2" id="lblQuestao2">Sobre o atendimento</label>
                                            <select name="questao2" class="form-control">
                                                <option value="null">Selecione..</option>
                                                <option value="ruim">Ruim</option>
                                                <option value="bom">Bom</option>
                                                <option value="otimo">Otimo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblQuestao3" id="lblQuestao3">Sobre as refeições</label>
                                            <select name="questao3" class="form-control">
                                                <option value="null">Selecione..</option>
                                                <option value="ruim">Ruim</option>
                                                <option value="bom">Bom</option>
                                                <option value="otimo">Otimo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">

                                        </div>
                                    </div>
                                </div>
                                <!-- SEGUNDA LINHA -->
                                <div class="form-group col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <form method="post" action="relatorio.php" name="dataInicial">
                                                <label name="lblDataInicial" id="lblDataInicial">Data Inicial:</label>
                                                <input type="text" id="dataInicial" name="dataInicial" class="form-control"/>
                                            </form>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <form method="post" action="relatorio.php" name="dataFinal">
                                              <label name="lblDataFinal" id="lblDataFinal">Data Final:</label>
                                              <input type="text" id="dataFinal" name="dataFinal" class="form-control"/>
                                          </form>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblHoraInicial" id="lblHoraInicial">Hora Inicial:</label>
                                            <form class="form-inline" method="post">
                                                <input type="time" class="form-control" style="width: 167px">
                                            </form>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label name="lblHoraFinal" id="lblHoraFinal">Hora Final:</label>
                                            <form class="form-inline" method="post">
                                                <input type="time" class="form-control" style="width: 167px">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- TERCEIRA LINHA -->
                                <div class="form-group col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <!-- PESQUISAR  style="border-color: #FFCC99; background-color: #FFDEAD;" <font color="#CD853F;">-->
                                            <button type="submit" class="btn btn-default" value="pesquisar" id="btnPesquisa">
                                              <b><i>Pesquisar</i></b>
                                            </button>
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
                                  <td align="center"><b>Sobre o ambiente</b></th>
                                  <td align="center"><b>Sobre o atendimento</b></th>
                                  <td align="center"><b>Sobre as Refeições</b></th>
                                  <td align="center"><b>Data</b></th>
                                  <td align="center"><b>Hora</b></th></div>
                              </tr>
                                  <?php
                                  include 'pesquisa.php';
                                  include 'conexao.php';

                                  echo '<tbody>';

                                  if (isset($_POST['vendedor'])) {
                                      $sql = "SELECT * FROM pesquisa WHERE '1' = '1' ";
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
                                      if (!empty($_POST['dataInicial']) && !empty($_POST['dataFinal'])) {
                                          $dataInicial = $_POST['dataInicial'];
                                          $dataFinal = $_POST['dataFinal'];
                                          $sql = $sql . " AND data between '$dataInicial' AND '$dataFinal' order by data ";
                                      }
                                      /*
                                      if ($_POST['dataFinal'] !== 'null') {
                                        $dataFinal = $_POST['dataFinal'];
                                        $sql = $sql . " AND data = '$date' ";
                                        echo $datFinal;
                                        }
                                       *
                                       */

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
                                              echo '<td align="center">' . $row["data"] . '</td>';
                                              echo '<td align="center">' . $row["hora"] . '</td>';
                                              echo '</tr>';
                                          }
                                      } else {
                                          echo "0 results";
                                      }
                                  }
                                  $conn->close();
                                  ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
