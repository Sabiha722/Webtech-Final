<?php
require_once '../controllers/bookcontroller.php';
$key = $_GET["id"];

$book = getBook($key);

echo "  <table>";
echo "<tr>";
echo '<td><img src="../'.$book["image"].'" alt="" style="width:200px;height:200px;" ></td>';
echo "</tr>";
echo "<tr>";
echo '<td > <strong>'.$book["name"].' </strong></td>';
echo "</tr>";
echo "<tr>";
echo '<td >  Author : '.$book["author"].'</td>';
echo "</tr>";
echo "<tr>";
echo '<td > Edition : '.$book["edition"].'</td>';
echo "</tr>";
echo "  </table>";
echo '<a href="dashboard.php">Dashboard</a>';

?>