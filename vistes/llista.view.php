<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4e9653a846.js" crossorigin="anonymous"></script>    
    <title>Document</title>
</head>

<body>
<?php include "capsalera.view.php"; ?>
    <div class="container">
        <div class="row">
            <?php foreach ($productes as $p) { ?>
                <div class="col-sm-3" onclick="location.href='producte/<?= $p->codi ?>';" style="cursor: pointer;">
                    <img src="img/<?= $p->codi; ?>.jpg" class="img-fluid" alt="">
                    <h4 class="text-center"><?= $p->nom ?></h4>
                    <p class="text-center"><?= $p->preu . " €" ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

