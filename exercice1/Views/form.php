<?php

require_once(CONTROLLER . 'errors.php');
require_once(CONTROLLER . 'formController.php');

$form = new formController('login.php', 'El Maaza Gomez', 'Habib', 'Envoyer');
echo $form->create();
echo $form->input();
echo $form->select();
echo $form->submit();
echo $form->textarea();
echo $form->radio();
echo $form->check();

echo $form->close();



 ?>
