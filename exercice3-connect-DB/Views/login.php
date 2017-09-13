<?php
require_once(CONTROLLERS . 'database.php');
require_once(CONTROLLERS . 'user.php');


try {
  $sessionUser = new DataBase();
   } catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
   }





 ?>
