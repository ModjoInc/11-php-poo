<?php
require_once(CONTROLLERS . 'errors.php');
require_once(CONTROLLERS . 'indexController.php');
?>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <h2>Parc de Voitures</h2>
    <h4>Introduire dans l'ordre suivant les caractéristiques de la voiture: </h4>
    <ol>
      <li>immatriculation</li>
      <li>Date de Mise en Circulation</li>
      <li>modèle</li>
      <li>marque</li>
      <li>kilométrage</li>
      <li>couleur</li>
      <li>poids</li>
    </ol>
  </div>
 </div>
 <?php
$audi = new Voiture(
  'D 34545',
  '01-09-2016',
  'A5',
  'Audi',
  25000,
  'white',
  1200
);
echo $audi->dispoVoiture();
echo $audi->setPays();
echo $audi->display();


  ?>
