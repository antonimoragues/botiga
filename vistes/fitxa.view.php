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
            <div class="col-sm-6">
                <img src="/img/<?= $producte->codi ?>.jpg" class="img-fluid" alt="">
            </div> 
            <div class="py-5 my-5 px-5 col-sm-6">
                <h3 class="text-center fs-1"><?= $producte->nom ?></h3>
                <h4 class="text-center"><?= $producte->preu." €"?></h4>
                <p class="text-center fw-light"><?= $producte->descripcio ?></h>
                <div class="d-grid py-4 gap-2 px-2">
                <button class="btn btn-dark py-3" type="button" onclick="location.href='carreto.php'">Afegir</button>
</div>
            </div>

        </div>
    </div>
</body>

</html>

