<?php
include('../dbconnect.php');
include('./classes/Book.php');

$title        = "Improve Your Opening Play";
$author       = "Chris Ward";
$isbn_13      = "";
$isbn_10      = "1-85744-236-9";
$publisher    = "EveryMan Chess";
$image_url    = "";
$category     = "Bible Reference";

$newbook = new Book($connection, $title, $author, $isbn_13, $isbn_10, $publisher, $image_url, $category);
echo('<pre>');
print_r($newbook);
echo('</pre>');
$newbook->add_book();
 ?>
