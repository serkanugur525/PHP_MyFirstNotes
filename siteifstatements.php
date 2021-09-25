<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form action="site.php" method="post">

    Male: <input type="checkbox" name="male[]" value="male"> <br>
    Tall: <input type="checkbox" name="tall[]" value="tall"> <br>

  <input type="submit">

  </form>

    <?php
      $isMale = $_POST["male"];
      $isTall = $_POST["tall"];

      if ($isMale && $isTall){
        echo "You are a tall Male";
      }
      elseif($isMale && !$isTall) {
        echo "You are a short Male";
      }
      elseif(!$isMale && $isTall) {
        echo "You are a tall Woman";
      }
      else {
        echo "You are a short Woman";
      }

     ?>
  </body>
</html>
