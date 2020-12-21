<?php
	require_once 'bookcontroller.php';
	$key = $_GET["key"];
	$books = liveSearch($key);


echo "<tr>";
echo '<td>ID</td>';
echo '<td>Name</td>';
echo '<td>Author</td>';
echo '<td>Edition</td>';
echo '<td>Image</td>';
echo "</tr>";

foreach($books as $book){
echo "<tr>";
echo '<td><a href="../views/book_detail.php?id='.$book["id"].'">'.$book["id"].'</a></td>';

echo '<td>'.$book["name"].'</td>';
echo '<td>'.$book["author"].'</td>';
echo '<td>'.$book["edition"].'</td>';
echo '<td ><img src="../'.$book["image"].'" alt="" style="width:100px;height:100px;" ></td>';
echo "</tr>";
	}
?>
<a href="#"></a>
