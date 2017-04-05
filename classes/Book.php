<?php
  class Book{
    public $connection;
    public $id;
    public $title;
    public $author_firstname;
    public $author_lastname;
    public $author_fullname;
    public $isbn_13;
    public $isbn_10;
    public $publisher;
    public $description;
    public $image_url;
    public $category;
    public $sql_add_book;
    public $sql_get_all_books;
    public $all_books;
    public $result;

    public function __construct($connection, $title, $author_firstname, $author_lastname, $isbn_13, $isbn_10, $publisher, $description, $image_url, $category){
      $this->connection       = $connection;
      $this->title            = $title;
      $this->author_firstname = $author_firstname;
      $this->author_lastname  = $author_lastname;
      $this->isbn_13          = $isbn_13;
      $this->isbn_10          = $isbn_10;
      $this->publisher        = $publisher;
      $this->description      = $description;
      $this->image_url        = $image_url;
      $this->category         = $category;
      $this->author_fullname  = $this->author_firstname.' '.$this->author_lastname;
    }

      public function add_book(){
        $this->sql_add_book = "INSERT INTO `table_books` (
          `book_id`,
          `book_title`,
          `book_author_firstname`,
          `book_author_lastname`,
          `book_isbn13`,
          `book_isbn10`,
          `book_publisher`,
          `book_description`,
          `book_imageUrl`,
          `book_category`,
          `book_dateCreated`
          ) VALUES (
            NULL,
            '$this->title',
            '$this->author_firstname',
            '$this->author_lastname',
            '$this->isbn_13',
            '$this->isbn_10',
            '$this->publisher',
            '$this->description',
            '$this->image_url',
            '$this->category',
            CURRENT_TIMESTAMP
          );";

          $this->result = mysqli_query($this->connection, $this->sql_add_book);
          if ($this->result) {
              echo (">>> Book added successfully...<br>");
          } else {
              echo (">>> There has been an error...<br>");
          }

          mysqli_close($this->connection);
      }
  }
 ?>
