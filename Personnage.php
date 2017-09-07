<!-- functions=methods
variables=properties -->
<?php

class Personnage
{
  private $_force;
  private $_localisation;
  private $_experience;
  private $_degats;

//------------constructeur---------//
public function __construct($force, $degats)
{
  echo 'le constructeur fonctionne, les objets ont été créés';
  $this->setForce($force);
  $this->setDegats($degats);
  $this->_experience = 1;

}
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
    if (!is_int($force))
    {
      trigger_error('l\experience d\un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }

    if ($force > 100)
    {
      trigger_error('l\'expérience d\'un personnage ne doit pas dépasser 100', E_USER_WARNING);
      return;
    }

    $this->_force = $force;
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
