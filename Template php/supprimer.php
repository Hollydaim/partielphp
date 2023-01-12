<?php
  //connexion a la base de données

  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php
  <?php 
  session_start();
  if (empty($_SESSION['nom'])) {
      $nom=$_SESSION['nom'];
    
header("location:inscription.php");

}
?>