<?php

$cart = array (
    array("codi"=>"1", "nom"=>"Aiden", "quantitat"=>"1", "preu"=>"10"),
    array("codi"=>"2", "nom"=>"Loan", "quantitat"=>"2", "preu"=>"15"),
    array("codi"=>"3", "nom"=>"Rasmus", "quantitat"=>"3", "preu"=>"20")
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4e9653a846.js" crossorigin="anonymous"></script>    
</head>
<body>
<?php include "capsalera.view.php"; ?>

<div class="container">
    <div class="row">
        <table class="mt-5 table">
            <thead>
                <tr>
                    <th class="col-sm-1 text-center" scope="col">Codi</th>
                    <th class="col-sm-5 text-center" scope="col">Nom</th>
                    <th class="col-sm-2 text-center" scope="col">Quantitat</th>
                    <th class="col-sm-2 text-center" scope="col">Preu</th>
                    <th class="col-sm-2 text-center" scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
            
<?php
for ($row = 0; $row < 3; $row++) {
    echo "<tr>";
    foreach($cart[$row] as $col => $col_value) {
        echo '<td class="text-center">'.$col_value.'</td>';
      }
      echo '<td class="text-center">'.$cart[$row]['quantitat']*$cart[$row]['preu']."</td>";
    echo "</tr>";
  }
  ?>

     </tbody>
        </table>
    </div>
</div>
</body>
</html>