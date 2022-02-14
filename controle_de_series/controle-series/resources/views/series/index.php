<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Series</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Séries</h1>
        </div>
        <a href="#" class="btn btn-dark mb-2">Adicionar</a>
        <ul class="list-group">
            <?php foreach ($series as $serie): ?>
                <li class="list-group-item"><?= $serie; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
