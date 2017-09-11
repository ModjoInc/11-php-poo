<!DOCTYPE html>
<html>
  <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>exercice 1</title>
  </head>
  <body>
    <div class="container">
      <div class="row">

    <?php
    require_once('errors.php');
    require_once('indexController.php');


    $val = new Validator(27, 27, 27);
    echo $val->validateString();
    echo $val->validateInt();
    echo $val->validateFloat();


     ?>
      </div>
    </div>
  </body>
</html>
