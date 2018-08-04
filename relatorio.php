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

                        <select>
                            <option >Selecione..</option>
                            <?php
                            while ($row = ibase_fetch_object($query2)) {
                                //imprimi as linhas na tela
                                echo "<option value='" . $row->S_NOME . "'>" . $row->S_NOME . "</option>";
                            }
                            ?>

                        </select>
                    </td>
                    <td>
                        <label name="lblQuestao1" id="lblVendedor">Questao1</label>
                        <select name="questao1">
                            <option value="null">Selecione..</option>
                            <option value="ruim">Ruim!</option>
                            <option value="bom">Bom!</option>
                            <option value="otimo">Otimo!</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblQuestao2" id="lblVendedor">Questao 2</label>
                        <select>
                            <option value="default">Selecione..</option>
                            <option value="ruim">Ruim</option>
                            <option value="bom">Bom</option>
                            <option value="otimo">Otimo</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblQuestao3" id="lblQuestao4">Questao 3</label>
                        <select>
                            <option value="default">Selecione..</option>
                            <option value="ruim">Ruim</option>
                            <option value="bom">Bom</option>
                            <option value="otimo">Otimo</option>
                        </select>
                    </td>
                    <td>
                        <label name="lblDataInicial" id="lblVendedor">Data Inicial:</label>
                        <select>
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
                $questao1 = $_POST['questao1'];
                echo $questao1;
                $sql = "SELECT * FROM pesquisa WHERE questao1 = '$questao1'";
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
                $conn->close();
               
                ?>
            </tbody>
        </table>

    </body>
</html>
