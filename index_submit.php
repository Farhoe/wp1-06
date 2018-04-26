<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $age = filter_input(INPUT_POST,'age');


    if ($age>=18) {
    echo "Tady máš pitíčko.";
    }
    else {
    echo "Bolí mě ti to říct. Ale.... Není ti plnoletých 18 roků. Sorry. Opravdu";
    }

    ?>


</html>
