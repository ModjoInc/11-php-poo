<?php
/**
 *
 */
class Validator
{
  public $string;
  public $int;
  public $float;


  public function __construct($string, $int, $float)
  {
    $this->string = $string;
    $this->int = $int;
    $this->float = $float;

  }

  public function validateString()
  {
    if (is_string($this->string)) {
      return '<div>Ceci est bien une string</div>';
    } else {
      return '<div>ERROR! Ceci n\'est pas une string</div>';
    }
  }

  public function validateInt()
  {
    if (is_integer($this->int)) {
      return '<div>Ceci est bien un integer</div>';
    } else {
      return '<div>ERROR! Ceci n\'est pas un integer</div>';
    }
  }

  public function validateFloat()
  {
    if (is_float($this->float)) {
      return '<div>Ceci est bien un float</div>';
    } else {
      return '<div>ERROR! Ceci n\'est pas un float</div>';
    }
  }
}

 ?>
