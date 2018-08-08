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
        <title>Relátorio</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <style type="text/css">
            .mytab tr:nth-child(odd) {
                background-color:#fff;
            }
            .mytab tr:nth-child(even) {
                background-color:#ccc;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" style="background-color: #FFFFCC;">
        <form name="frmRel" method="post" action="relatorio.php">
            <table width="100%">
                <tr>
                    <td>
                        <label name="lblVendedor" id="lblVendedor">Vendedor</label>

                        <select name="vendedor">
                            <option value=null >Selecione..</option>
                            <?php
                            while ($row = ibase_fetch_object($query2)) {
                                //imprimi as linhas na tela
                                echo "<option value='" . $row->S_NOME . "'>" . $row->S_NOME . "</option>";
                            }
                            ?>

                        </select>
                    </td>
                    <td>
                        <label name="lblQuestao1" id="lblQuestao1">Questao1</label>
                        <select name="questao1">
                            <option value=null>Selecione..</option>
                            <option value="ruim">Ruim!</option>
                            <option value="bom">Bom!</option>
                            <option value="otimo">Otimo!</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblQuestao2" id="lblQuestao2">Questao 2</label>
                        <select name="questao2">
                            <option value="null">Selecione..</option>
                            <option value="ruim">Ruim</option>
                            <option value="bom">Bom</option>
                            <option value="otimo">Otimo</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblQuestao3" id="lblQuestao3">Questao 3</label>
                        <select name="questao3">
                            <option value="null">Selecione..</option>
                            <option value="ruim">Ruim</option>
                            <option value="bom">Bom</option>
                            <option value="otimo">Otimo</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblDataInicial" id="lbalDataInicial">Data Inicial:</label>
                        <select name="dataInicial">
                            <option value="default">Selecione..</option>
                            <?php echo "<option value='" . $date . "'>" . $dateBr . "</option>" ?>;
                            <option value="data 2">Data 2</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblDataFinal" id="lblDataFinal">Data Final:</label>
                        <select name="dataFinal">
                            <option value="default">Selecione..</option>
                            <option value="data 1">Data 1</option>
                            <option value="data 2">Data 2</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblHoraInicial" id="lblHoraInicial">Hora Inicial:</label>
                        <select name="horaInicial">
                            <option value="default">Selecione..</option>
                            <option value="hora 1">Data 1</option>
                            <option value="hora 2">Data 2</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblHoraFinal" id="lblHoraFinal">Hora Final:</label>
                        <select name="horaFinal">
                            <option value="default">Selecione..</option>
                            <option value="data 1">Data 1</option>
                            <option value="data 2">Data 2</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>

            <!-- PESQUISAR -->
            <button type="submit" class="btn btn-default" value="pesquisar">Pesquisar</button><br>

        </form>
        </div>

        <div class="container-fluid">
            <table  class="table table-striped" width="100%">
                <thead>
                    <tr>
                        <td align="center"><b>Comanda</b></th>
                        <td align="center"><b>Vendedor(a)</b></th>
                        <td align="center"><b>Questão 2</b></th>
                        <td align="center"><b>Questão 1</b></th>
                        <td align="center"><b>Questão 3</b></th>
                        <td align="center"><b>Data</b></th>
                        <td align="center"><b>Hora</b></th>
                    </tr>
                </thead>
                <tbody>
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
                        if ($_POST['dataInicial'] !== 'null') {
                            $dataInicial = $_POST['dataInicial'];
                            $sql = $sql . " AND data = '$date' ";
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
        <script src="assets/js/jquery-3.3.1.js"/>
        <script src="assets/js/bootstrap.js"/>
    </body>
</html>
