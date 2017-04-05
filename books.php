<?php

public function get_all_books(){
  $sql_get_all_books = "SELECT * FROM table_books";
  $this->result = mysqli_query($this->connection, $sql_get_all_books);

  if (mysqli_num_rows($this->result) > 0) {
      echo (">>> Get ALL Books Query Successful...<br>");
  } else {
      echo (">>> There has been an error...<br>");
  }
  $this->all_books = mysqli_num_rows($this->result);
  mysqli_close($this->connection);
  return $this->all_books;
}
public function get_one_book(){}
public function update_book(){}
public function delete_book(){}

public function get_book_author(){
    return $this->author_fullname;
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
  public function get_book_imageUrl(){
    return $this->image_url;
  }
  public function get_book_category(){
    return $this->category;
  }


 ?>
