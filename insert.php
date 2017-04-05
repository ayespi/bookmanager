<?php
if(isset($_POST['book_added'])){
  include('../dbconnect.php');
  include('./classes/Book.php');

  $title            = $_POST['book_title'];
  $author_firstname = $_POST['book_author_firstname'];
  $author_lastname  = $_POST['book_author_lastname'];
  $isbn_13          = $_POST['book_isbn13'];
  $isbn_10          = $_POST['book_isbn10'];
  $publisher        = $_POST['book_publisher'];
  $description      = $_POST['book_description'];
  $image_url        = $_POST['book_imageUrl'];
  $category         = $_POST['book_category'];
  // 
  // echo($title.'<br>');
  // echo($author_firstname.'<br>');
  // echo($author_lastname.'<br>');
  // echo($isbn_13.'<br>');
  // echo($isbn_10.'<br>');
  // echo($publisher.'<br>');
  // echo($description.'<br>');
  // echo($image_url.'<br>');
  // echo($category.'<br>');

  $newbook = new Book($connection, $title, $author_firstname, $author_lastname, $isbn_13, $isbn_10, $publisher, $description, $image_url, $category);
  // echo('<pre>');
  // print_r($newbook);
  // echo('</pre>');
  $newbook->add_book();
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Book</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h2>Add Book</h2>
        <form action="" method="post">
          <p>
            <label for="book_title">Title</label><br>
            <input type="text" name="book_title">
          </p>
          <p>
            <label for="book_author_firstname">Author's First Name</label><br>
            <input type="text" name="book_author_firstname">
          </p>
          <p>
            <label for="book_author_lastname">Author's Last Name</label><br>
            <input type="text" name="book_author_lastname">
          </p>
          <p>
            <label for="book_isbn13">ISBN-13</label><br>
            <input type="text" name="book_isbn13">
          </p>
          <p>
            <label for="book_isbn10">ISBN-10</label><br>
            <input type="text" name="book_isbn10">
          </p>
          <p>
            <label for="book_publisher">Publisher</label><br>
            <input type="text" name="book_publisher">
          </p>
          <p>
            <label for="book_description">Description</label><br>
            <textarea name="book_description" rows="8" cols="30"></textarea>
          </p>
          <p>
            <label for="book_imageUrl">Image URL</label><br>
            <input type="text" name="book_imageUrl">
          </p>
          <p>
            <label for="book_category">Category</label><br>
            <input type="text" name="book_category">
          </p>
          <p>
            <input type="submit" name="book_added" value="Add Book">
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
