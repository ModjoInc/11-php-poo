<?php
class formController {
  public $action;
  public $nom;
  public $prenom;
  public $modifier;
    // ajout d'un construct pour lors de la création de l'ojet on puisse paramétrer
    public function __construct($action, $nom, $prenom,$modifier){
      $this->action = $action;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->modifier = $modifier;
    }
    //création des fonctions à appeler pour créer le formulaire
    public function create(){
      return "<div class='form-group'><form action='" . $this->action . "' method='POST'></div>";
    }

    public function input(){
      return "<div class='form-group'><input type='text' name='' value='" . $this->nom . "' ></div>";
    }

    public function select(){
      return "<div class='form-group'><select class='' name=''></select></div>";
    }

    public function submit(){
      return "<div class='form-group'><button type='submit' name='" . $this->modifier . "'>" . $this->modifier . "</button></div>";
    }

    public function textarea(){
      return "<div class='form-group'><textarea name='name' rows='8' cols='80'></textarea></div>";
    }

    public function radio(){
      return '<div class="form-group"><input type="radio" name="radio" value="option1></div>';
    }

    public function check(){
      return '<div class="form-group"><input type="checkbox" name="" value=""></div>';
    }
    // fonction pour clore le formulaire
    public function close(){
      return '</form>';
    }


}

 ?>
