<?php
require_once(CONTROLLER . 'errors.php');
require_once(CONTROLLER . 'pageController.php');

$html = new pageHtml('css/main.css', 'utf-8', 'exercice 2', 'http://www.google.be', 'js/app.js');
echo $html->head();
echo $html->bs();
echo $html->linkMeta();
echo $html->linkCss();
echo $html->title();
echo $html->link();
echo $html->js();


 ?>
