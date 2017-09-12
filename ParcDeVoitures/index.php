<?php

define('VIEWS', 'Views/');
define('CONTROLLERS', 'Controllers/');



require_once(VIEWS . 'header.php');
require_once(VIEWS . 'indexView.php');
//
// class voiture:
// -----variables -----
// - immat string non modifiable
// - DMC date non modifiable
// - kilometrage int km
// - modèle string non modifiable
// - marque  string non modifiable
// - couleur string
// - poids int kg
// - disponibilité string
// - usage string
//
//  ------ if ---
//  modèle Audi d'office 'reserved' ELSE 'free'
//  si poids > 3500 usage = utilitaire ELSE commerciale
//  si immat commence par BE, FR, D -> Pays=Belgique||France||Allemagne
//  si kilometrage < 100000 = usage Low
//  si kilometrage > 100000 <=200000 usage middle
//  si kilometrage > 200000 = usage high
//  année d'activité entre DateTime et DMC
//
//  ------- méthode rouler ------
//  rouler() qui augmente l'usure de 1000000km
//
//  -------- méthode display -------
//  photos et caractéristiques dans un tableau HTML

require_once(VIEWS . 'footer.php');

 ?>
