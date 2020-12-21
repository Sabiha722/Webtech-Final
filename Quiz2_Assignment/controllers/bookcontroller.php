<?php
	require_once '../models/db_connect.php';
function liveSearch($key){
  $query = "SELECT * FROM books WHERE name LIKE '%$key%'";
  $books = getArray($query);
  return $books;
}
function getBook($id){
  $query="SELECT * FROM books WHERE id=$id";
  $books = getArray($query);
  return $books[0];

}
 ?>
