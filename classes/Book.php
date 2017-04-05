<?php
  class Book{
    public $connection;
    public $id;
    public $title;
    public $author;
    public $isbn_13;
    public $isbn_10;
    public $publisher;
    public $image_url;
    public $category;
    public $sql_add_book;
    public $result;

    public function __construct($connection, $title, $author, $isbn_13, $isbn_10, $publisher, $image_url, $category){
      $this->connection   = $connection;
      $this->title        = $title;
      $this->author       = $author;
      $this->isbn_13      = $isbn_13;
      $this->isbn_10      = $isbn_10;
      $this->publisher    = $publisher;
      $this->image_url    = $image_url;
      $this->category     = $category;
    }

      public function get_book_author(){
        return $this->author;
      }
      public function get_book_title(){
        return $this->title;
      }
      public function get_book_isbn13(){
        return $this->isbn_13;
      }
      public function get_book_isbn10(){
        return $this->isbn_10;
      }
      public function get_book_publisher(){
        return $this->publisher;
      }
      public function get_book_image(){
        return $this->image_url;
      }
      public function get_book_category(){
        return $this->category;
      }
      public function add_book(){
        $this->sql_add_book = "INSERT INTO `books_table` (
          `book_id`,
          `book_title`,
          `book_author`,
          `book_isbn13`,
          `book_isbn10`,
          `book_publisher`,
          `book_description`,
          `book_imageUrl`,
          `book_dateCreated`
          ) VALUES (
            NULL,
            '$this->title',
            '$this->author',
            '$this->isbn_13',
            '$this->isbn_10',
            '$this->publisher',
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
      public function view_all_books(){}
      public function view_one_book(){}
      public function update_book(){}
      public function delete_book(){}

  }
 ?>
