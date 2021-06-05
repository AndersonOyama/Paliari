<?php


/**
 * Essa classe possui o metodo getQtdeNotas ele não está completo e cabe a você concluí-lo de acordo com os requisitos.
 */
class Troco
{
    /**
     * Dado um valor em reais, retorna a quantidade de notas necessárias para formar o troco.
     * @param float $reais
     * @return array
     */
    public function getQtdeNotas(float $reais): array
    {
        $reais = number_format($reais, 2);
        $notas_qtd = [
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0
        ];

        /*
         * Coloque o seu código aqui.
         * Você é livre para criar classes, arquivos e funções da maneira que achar melhor.
         * Esse método deve retornar a quantidade de notas e moedas necessária para o valor em reais passado para ele
         *
         * Exemplo:
         * getQtdeNotas(100.00); // Deve retornar algo como ['100' => 1]
         */


        foreach ($notas_qtd as $nota => $qtd_notas) {
            $qtd_notas = floor(number_format($reais, 2)/floatval($nota));
            $notas_qtd[$nota] = $qtd_notas;
            $reais = number_format($reais - ($qtd_notas * $nota), 2);
            if ($reais == 0.00) {
                break;
            }
        }

        return $notas_qtd;
    }
}
?>

<style>
    h1 {
        text-align: center;
    }
</style>


<html lang="pt-br">

<header>

    <h1>Avaliação de troco para Paliari</h1>
</header>

<body>
    <?php

    ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Valor do troco: <input type="number" step="0.01" min="0" name="valorTroco" value="<?php echo $valorTroco; ?>">
        <span class="error"><?php echo $valueErr; ?></span>
        <br><br>
        <input type="submit" name="calcular" value="Calcular Troco">
    </form>


    <h2>Troco a ser devolvido:</h2>
    <br>
    <?php

    $valueErr = "";
    $class_Troco = new Troco;


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["valorTroco"])) {
            $valueErr = "O valor deve ser informado";
        } else {
            $notas_troco = $class_Troco->getQtdeNotas($_POST["valorTroco"]);
        }
    }
    foreach ($notas_troco as $valor_nota => $qtd_notas) {
        if ($qtd_notas == 0) {
            continue;
        } else {
            echo "Valor da moeda: R$", number_format($valor_nota, 2)," - Quantidade: $qtd_notas<br>";
        }
    }
    ?>


</body>


</html>