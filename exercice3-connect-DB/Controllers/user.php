<?php
/**
 * Classe USer avec propriétés suivantes:
 * id, username, email, password, connected
 */
class ClassName extends AnotherClass
{
  public $username;
  public $email;
  public $connected;

  private $id;
  private $password;
  function __construct($id, $username, $email, $password, $connected)
  {
    $this->id = $id;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->connected = $connected;
  }

  /***************METHODES************/
  public function enregistrementBdUser()
  {
    /*****/
  }
  public function sessionUserConnect()
  {
    /****/
  }
  public function sessionUserDisconnect()
  {
    /****/
  }
  public function updateUserName()
  {
    /****/
  }
  public function updateUserMail()
  {
    /****/
  }
  public function destroyUser()
  {
    /****/
  }


}





 ?>
