<?php
include '../classes/Producte.class.php';

class ProducteControlador {
  // Methods
  function llista() {

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
    
  }
  
  function cerca($id) {

      include "../config.php";

      //$id=$_GET['codi'];

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT id, nom,preu, `desc` FROM productes WHERE id=$id";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $producte = new Producte();
      $producte->codi = $row['id'];
      $producte->nom = $row['nom'];
      $producte->preu = $row['preu'];
      $producte->descripcio = $row['desc'];

      $conn->close();

      include '../vistes/fitxa.view.php';
  }

  static function nou() {
    echo "inserta un nou producte";
  }

  static function contar(){
      include "../config.php";

      //$id=$_GET['codi'];

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT count(*) as total FROM productes";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      echo "Total: ".$row['total'];
      $conn->close();
  }

}
?>
