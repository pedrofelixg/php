<?php
use Alura\Banco\Modelo\Endereco;

require_once 'autoLoad.php';

$umEndereco = new Endereco('Buenos Aires', 'Centro', 'Rua Major Sev. Mendes', '75');
$doisEndereco = new Endereco('Nazaré da Mata', 'Juá', 'Cônego Felipe', '76-b');


echo $umEndereco . PHP_EOL;
echo $doisEndereco. PHP_EOL;

