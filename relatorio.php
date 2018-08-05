<?php
include 'conexaofirebird.php';
//Executa a instrução SQL
$query = ibase_query($dbh, $sql);
$query2 = ibase_query($dbh, $sql2);
?>
<html>
    <head>
        <title>Relátorio</title>
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
                        <label name="lblDataInicial" id="lblVendedor">Data Inicial:</label>
                        <select name="dataInicial">
                            <option value="default">Selecione..</option>
                            <option value="data 1">Data 1</option>
                            <option value="data 2">Data 2</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblDataFinal" id="lblVendedor">Data Final:</label>
                        <select>
                            <option value="default">Selecione..</option>
                            <option value="data 1">Data 1</option>
                            <option value="data 2">Data 2</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" value="pesquisar">Pesquisar</button>
        </form>
        <table  class="mytab" width="100%">
            <thead><tr>
                    <th>Comanda</th>
                    <th>Vendedor</th>
                    <th>Questão 1</th>
                    <th>Questão 2</th>
                    <th>Questão 3</th>
                    <th>Data</th>
                </tr></thead>
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

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each 
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row["comanda"] . '</td>';
                            echo '<td>' . $row["vendedor"] . '</td>';
                            echo '<td>' . $row["questao1"] . '</td>';
                            echo '<td>' . $row["questao2"] . '</td>';
                            echo '<td>' . $row["questao3"] . '</td>';
                            echo '<td>' . $row["data"] . '</td>';
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

    </body>
</html>
