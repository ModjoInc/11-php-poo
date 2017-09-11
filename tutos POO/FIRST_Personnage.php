<!-- functions=methods
variables=properties -->
<?php

class Personnage
{
  private $_force;
  private $_localisation;
  private $_experience;
  private $_degats;
//------------déclaration des constantes en rapport avec la force--------//
  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;

  private static $_textADire = 'tu vas pleurer jusqu\'à c\'que tu pleure';

public function __construct($forceInitiale)
{
  $this->setForce($forceInitiale);
}

//------------constructeur---------//
// public function __construct($force, $degats)
// {
//   echo 'le constructeur fonctionne, les objets ont été créés';
//   $this->setForce($force);
//   $this->setDegats($degats);
//   $this->_experience = 1;
//
// }
//------------attack---------------//
  public function frapper(Personnage $persoAFrapper)
  {
    $persoAFrapper->_degats += $this->_force;
  }
//-----------gain XP---------------//
  public function gagnerExperience()
  {
    $this->_experience++;
  }
//------------accesseur FORCE--------------//
  public function setForce($force)
  {
    // if (!is_int($force))
    // {
    //   trigger_error('l\experience d\un personnage doit être un nombre entier', E_USER_WARNING);
    //   return;
    // }
    //
    // if ($force > 100)
    // {
    //   trigger_error('l\'expérience d\'un personnage ne doit pas dépasser 100', E_USER_WARNING);
    //   return;
    // }
    if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
    {
      $this->_force = $force;
    }

    $this->_force = $force;
  }

  public static function parler()
  {
    echo self::$_textADire;
  }
//--------------accesseur Dégats----------------------//
public function setDegats($degats)
  {
    if (!is_int($degats))
    {
      trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }

    $this->_degats = $degats;
  }
//--------------accesseur Experience------------------//
  public function setExperience($experience)
  {
    if (!is_int($experience))
    {
      trigger_error('l\experience d\un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }

    if ($experience > 100)
    {
      trigger_error('l\'expérience d\'un personnage ne doit pas dépasser 100', E_USER_WARNING);
      return;
    }

    $this->_experience = $experience;
  }
//--------------méthodes d'affichage des propriétés----------//
  public function degats()
  {
    return $this->_degats;
  }

  public function force()
  {
    return $this->_force;
  }

  public function experience()
  {
    return $this->_experience;
  }
}
?>
