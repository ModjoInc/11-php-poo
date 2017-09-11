<?php
include ('errors1.php');
function chargerClasses($classe)
{
  require $classe . '.php';
}

spl_autoload_register('chargerClasses');
?>
<?php
      $perso = new Personnage(Personnage::FORCE_MOYENNE);
      Personnage::parler();

      $test1 = new Compteur;
      $test2 = new Compteur;
      $test3 = new Compteur;

      echo Compteur::getCompteur();

      // $perso1 = new Personnage(60,0);
      // $perso2 = new Personnage(100,10);
      //
      //
      // $perso1->setExperience(2);
      //
      // $perso2->setExperience(58);
      //
      // $perso1->frapper($perso2);
      // $perso1->gagnerExperience();
      //
      // $perso2->frapper($perso1);
      // $perso2->gagnerExperience();
      //
      // echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force <br />';
      //
      // echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience <br />';
      //
      // echo 'Le personnage 1 a ', $perso1->degats(), ' de dégats, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégats <br />';
?>
