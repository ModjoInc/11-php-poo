<?php
/**
 *
 */
class Voiture
{
  /*---------------propriétés-----------*/
  public $immat;
  public $DMC;
  public $modele;
  public $marque;
  public $pays;

  private $parcours;

  public $usage;
  public $km = 0;
  public $couleur;
  public $poids;
  public $dispo;
/*---------------construct--------------*/
  function __construct(
    $immat,
    $DMC,
    $modele,
    $marque,
    $km,
    $couleur,
    $poids)
  {
    $this->immat = $immat;
    $this->DMC = $DMC;
    $this->modele = $modele;
    $this->marque = $marque;
    $this->km = $km;
    $this->couleur = $couleur;
    $this->poids = $poids;
  }

  /*---------------méthodes--------------*/
  /*---get/set ROULER---*/
  public function rouler($parcours=100000){
      $this->km += $parcours;
      return $this->getParcours();
  }
  public function getParcours(){
    if ($this->km < 100000)
    {
      $this->parcours = 'Low';
      return $this->parcours;
    }
    elseif ($this->km > 100000 && $km < 200000)
    {
      $this->parcours = 'Middle';
      return $this->parcours;
    }
    else
    {
      $this->parcours = 'High';
      return $this->parcours;
    }
  }

  /*---get/set disponibilité AUDI---*/
  public function dispoVoiture(){
    if ($this->marque === 'Audi')
    {
      $this->dispo = 'Reserved';
      return $this->getDispo();
    }
    else
    {
      $this->dispo = 'Available';
      return $this->getDispo();
    }
  }

  public function getDispo(){
    return '<div class="col-sm-6 col-sm-offset-3">' . $this->dispo . '</div>';
  }

  /*---get/set Age de la voiture---*/
  public function ageVoiture()
  {
      $now = new DateTime();
      $date_de_creation = new DateTime($this->DMC);

      $interval = $date_de_creation->diff($now);
      return $interval->format('%Y années d\'ancienneté');
  }
  /*---get/set Utilitaire ou pas---*/
  public function fonctionVoiture(){
    if ($this->poids > 3500)
    {
      $this->usage = 'UTILITAIRE';
      return $this->getUsage();
    }
    else
    {
      $this->usage = 'COMMERCIAL';
      return $this->getUsage();
    }
  }
  public function getUsage() {
    return '<div class="col-sm-6 col-sm-offset-3">' . $this->usage . '</div>';
  }
  /*--get/set immat commence par BE, FR, D -> Pays=Belgique||France||Allemagne*/
  public function setPays(){
    if (strpos($this->immat, "BE") === 0)
    {
      $this->pays = 'Pays = BELGIQUE';
      return $this->getPays();
    }
    elseif (strpos($this->immat, "FR") === 0)
    {
      $this->pays = 'Pays = FRANCE';
      return $this->getPays();
    }
    elseif (strpos($this->immat, "D") === 0)
    {
      $this->pays = 'Pays = ALLEMAGNE';
      return $this->getPays();
    }
    else
    {
      $this->pays = 'Pays =AUTRES';
      return $this->getPays();
    }

  }

  public function getPays() {
    return '<div class="col-sm-6 col-sm-offset-3">' . $this->pays . '</div>';
  }

  /*---get/set DISPLAY---*/
  public function display(){
    if ($this->model = 'A5') {
      return '<div class="col-sm-6 col-sm-offset-3">
      <div class="table-responsive">
        <table class="table">
          <th>General specification</th>
          <tr>
          <td>Cylinders: 6, in V</td>
          </tr>
          <tr>
            <td>Valves per cylinder: 4</td>
          </tr>
          <tr>
            <td>Max power: 200 kW (272 hp)</td>
          </tr>
          <tr>
            <td>Top speed: 250 km/h</td>
          </tr>
          <tr>
            <td>Acceleration 0-100 km/h:5,3 s</td>
          </tr>

          <th>image</th>
          <tr>
            <td><img class="img-responsive" src="'. VIEWS . 'img/audi-a5.jpg' . '" alt="Audi A5"></td>
          </tr>
        </table>
      </div> </div>';
    }
  }
}
 ?>
