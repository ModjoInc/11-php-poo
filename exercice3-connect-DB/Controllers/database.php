<?php
/**
 *Class DataBase : connection à la base des données
 */
class DataBase
{
  private $servername = "localhost";
  private $username = "root";
  private $password = "mvdtvw28";
  public $conn;

  function __construct($servername, $username, $password)
  {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
  }
  /***********METHODES*********/
  public function connectDb(){
    $conn = new PDO('mysql:host='.$this->servername.';dbname=mini_chat;charset=utf8', $this->username, $this->password);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}


?>
