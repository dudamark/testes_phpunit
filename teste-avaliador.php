<?php

use Testes\Leilao\Model\Leilao;
use Testes\Leilao\Model\Usuario;
use Testes\Leilao\Service\Avaliador;
use Testes\Leilao\Model\Lance;

require 'vendor/autoload.php';

// Arrange - Given / Preparamos o cenário do teste
$leilao = new Leilao('Fiat 147 0km');

$maria = new Usuario('Maria');
$joao = new Usuario('Joao');

$leilao->recebeLance(new Lance($joao, 2000));
$leilao->recebeLance(new Lance($maria, 2500));

$leiloeiro = new Avaliador();

// Act - When / Executamos o código a ser testado
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

// Assert - Then / Verificamos se a saída é a esperada
$valorEsperado = 2500;

if ($maiorValor == $valorEsperado) {
    echo "TESTE OK";
} else {
    echo "TESTE FALHOU";
}





