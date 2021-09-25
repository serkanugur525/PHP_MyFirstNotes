<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOGOFABRICS</title>
  </head>
  <body>

    <form action="site.php"  method="get">
<br>
<input type="number" name="num1">
<br>
<input type="number" name="num2">
<br>
<input type="submit" value="Hesapla">
    </form>
Answer: <?php echo$_GET['num1'] + $_GET['num2']?>

  </body>
</html>
