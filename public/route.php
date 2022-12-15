<?php
include '../controladors/ProducteControlador.class.php';
include '../controladors/CarretoControlador.class.php';

$uri=$_SERVER["REQUEST_URI"];
$path=explode("/",$uri);

switch ($path[1]) {
  case "productes":
    $c = new ProducteControlador();
    $c->llista();
    break;
  case "producte":
    $codi=$path[2];
    $c = new ProducteControlador();
    $c->cerca($codi); 
    break;
  case "carreto":
    $c = new CarretoControlador();
    $c->mostra();
    break;
  case "contar":
    $c = new ProducteControlador();
    $c->contar();
    break;
}
