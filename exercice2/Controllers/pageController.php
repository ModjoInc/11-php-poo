<?php
class pageHtml {
  public $css;
  public $charset;
  public $title;
  public $link;
  public $js;
  public $head = '<!DOCTYPE html><html><head>';
  public $bs = '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';

    public function __construct($css, $charset, $title, $link, $js){
        $this->css = $css;
        $this->charset = $charset;
        $this->title = $title;
        $this->link = $link;
        $this->js = $js;
    }

    public function head(){
      return $this->head;
    }

    public function bs(){
      return $this->bs;
    }

    public function linkCss(){
      return '<link rel="stylesheet" href="' . $this->css . '">';
    }

    public function linkMeta(){
      return '<meta charset="' . $this->charset .'">';
    }

    public function title(){
      return '<title>' . $this->title . '</title></head><body>';
    }

    public function link(){
      return '<a href="' . $this->link . '">'. $this->link .'</a>';
    }

    public function js(){
      return '<script src="' . $this->js . '"> </script>';
    }

}

 ?>
