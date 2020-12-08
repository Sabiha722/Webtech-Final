<?php
require_once '../models/db_connect.php';

function getAllUsers(){
    $query = "select * from taskusers";
    return get($query);
}


 ?>
