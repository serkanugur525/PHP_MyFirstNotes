<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
class Chef {
  function makeChicken(){
    echo "The chef makes chicken <br>";
  }
  function makeSalad(){
    echo "the chef makes salad <br>";
  }
  function makeSpecialDish(){
    echo "the chef makes bbq ribs <br>";
  }
}

class ItalianChef extends Chef{
  function makePasta(){
    echo "The chef makes pasta  <br>";
  }
  function makeSpecialDish(){
    echo " The chef makes chicken parm <br>";
  }
}
$chef=new Chef();
$chef->makeSpecialDish();

$Italianchef=new ItalianChef();
$Italianchef->makeSpecialDish();
    ?>


  </body>
</html>
