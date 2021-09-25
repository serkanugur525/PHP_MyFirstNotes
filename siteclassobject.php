<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
class Book {
  var $title;
  var $author;
  var $pages;
}
$book1=new Book;
$book1 -> title="Harry Potter";
$book1 -> author="JK Rowling";
$book1 -> pages=400;

$book2=new Book;
$book2 -> title="Lord of Kings";
$book2 -> author="Tolkien";
$book2 -> pages=700;


echo $book2 -> title ;
echo $book2 -> author;
echo $book2 -> pages ;


    ?>


  </body>
</html>
