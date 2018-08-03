<?php

/**
 * Description of pesquisa
 *
 * @author MarquiM
 */
class pesquisa {

    private $id;
    private $comanda;
    private $vendedor;
    private $questao1;
    private $questao2;
    private $questao3;

    function getId() {
        return $this->id;
    }

    function getComanda() {
        return $this->comanda;
    }

    function getVendedor() {
        return $this->vendedor;
    }

    function getQuestao1() {
        return $this->questao1;
    }

    function getQuestao2() {
        return $this->questao2;
    }

    function getQuestao3() {
        return $this->questao3;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setComanda($comanda) {
        $this->comanda = $comanda;
    }

    function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    function setQuestao1($questao1) {
        $this->questao1 = $questao1;
    }

    function setQuestao2($questao2) {
        $this->questao2 = $questao2;
    }

    function setQuestao3($questao3) {
        $this->questao3 = $questao3;
    }

        
    public function exibir() {
        include './conexao.php';
        $sql = "SELECT * FROM pesquisa ";
        /*
          . " WHERE "
          . "comanda = '' "
          . "AND vendedor = ''"
          . "status = '' ";
         * 
         */
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each 
            while ($row = $result->fetch_assoc()) {
                echo $row["id"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

    public function salvar($pesquisa) {
        include './conexao.php';

        $comanda = $pesquisa->comanda;
        $vendedor = $pesquisa->vendedor;
        $questao1 = $pesquisa->questao1;
        $questao2 = $pesquisa->questao2;
        $questao3 = $pesquisa->questao3;

        $sql = "INSERT INTO pesquisa (comanda, vendedor, questao1, questao2, questao3)"
                . " VALUES ('$comanda', '$vendedor', '$questao1', '$questao2', '$questao3')";
        if (mysqli_query($conn, $sql)) {
            //echo "Pesquisa Realizada Com Sucesso!!";
            header('Location:index.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}?>

<input type="submit" name="Inicio" value="Inicio" onClick="javascript:window.location.href='index.php'">