<?php
include 'funcoes.php';

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    12070305465 => [
        'titular' => 'Pedro G',
        'saldo' => 509
    ]
];

$contasCorrentes[12345678911] = saque($contasCorrentes[12345678911], 500);
$contasCorrentes[12325678912] = saque($contasCorrentes[12325678912], 100);

$contasCorrentes[12070305465] = deposito($contasCorrentes[12070305465], 500);

echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
   exibeConta($conta);
}
echo "</ul>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CONTAS CORRENTES ALEATÓRIAS</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) {?>
        <dt><h3><?php echo $conta['titular'];?> - <?php echo $cpf; ?> </h3></dt>
        <dd>Saldo: <?php echo $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>


