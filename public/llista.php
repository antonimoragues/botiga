<?php
   include '../controladors/ProducteControlador.class.php';
   include "../config.php";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, nom,preu FROM productes";
    $result = $conn->query($sql);
    $productes = array();

    while ($row = $result->fetch_assoc()) {

        $p = new Producte();

        $p->codi = $row['id'];
        $p->nom = $row['nom'];
        $p->preu = $row['preu'];

        $productes[] = $p;
    }

    $conn->close();

    include '../vistes/llista.view.php';
