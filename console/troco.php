<?php

// Você pode utilizar este arquivo para testar no console o retorno da função.
// Basta executar php console/troco.php

require __DIR__ . '/../vendor/autoload.php';

$reais = $argv[1] ?: 0;

$troco = new Troco();

$notas = $troco->getQtdeNotas($reais);

var_export($notas);
