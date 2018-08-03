<?php
include 'conexaofirebird.php';
//Executa a instrução SQL
$query = ibase_query($dbh, $sql);
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
                        <select>
                            <?php
                            while ($row = ibase_fetch_object($query)) {
                                //imprimi as linhas na tela
                                echo "<option value='" . $row->ID . "'>"  . $row->ID . "</option>";
                            }
                            ?>

                        </select>
                    </td>
                    <td>
                        <label name="lblQuestao1" id="lblVendedor">Questao1</label>
                        <select>
                            <option value="ruim">Ruim!</option>
                            <option value="bom">Bom!</option>
                            <option value="otimo">Otimo!</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblQuestao2" id="lblVendedor">Questao 2</label>
                        <select>
                            <option value="ruim">Ruim</option>
                            <option value="bom">Bom</option>
                            <option value="otimo">Otimo</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblDataInicial" id="lblVendedor">Data Inicial:</label>
                        <select>
                            <option value="data 1">Data 1</option>
                            <option value="data 2">Data 2</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblDataFinal" id="lblVendedor">Data Final:</label>
                        <select>
                            <option value="data 1">Data 1</option>
                            <option value="data 2">Data 2</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
        <table  class="mytab" width="100%">
            <thead><tr>
                    <th>Comanda</th>
                    <th>Vendedor</th>
                    <th>Questão 1</th>
                    <th>Questão 2</th>
                    <th>Questão 3</th>
                </tr></thead>
            <tbody>
                <?php
                include 'pesquisa.php';
                include 'conexao.php';
                echo '<tbody>';
                $sql = "SELECT * FROM pesquisa ";
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
                        echo '</tr>';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </tbody>
        </table>

    </body>
</html>
