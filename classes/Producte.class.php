<?php
class Producte {
  // Properties
  public $codi;
  public $nom;
  public $preu;
  public $descripcio;

  // Methods
  function set_non($nom) {
    $this->nom = $nom;
  }
  function get_nom() {
    return $this->nom;
  }
}
?>