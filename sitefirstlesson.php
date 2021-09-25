<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
echo "<h1>HOGOFABRICS</h1>";
echo "<hr>";
echo "<p>Textile is our passion!</p>";


$characterName ="Arda";
$characterAge =12;

echo "There once was a man named $characterName <br>";
echo "He was $characterAge years old <br>";
echo "He really liked the name $characterName <br>";
echo "But didn't like being $characterAge <br>";

echo strtoupper ("<h1>Arda the Gamer</h1>");

echo sqrt(144);
echo pow(3,4);
echo abs(-9);
echo ceil(3.1);
echo floor(7.9);
?>

<form action="site.php"  method="get">

Name: <input type="text" name="name">
<input type="submit">


</form>


  </body>
</html>
