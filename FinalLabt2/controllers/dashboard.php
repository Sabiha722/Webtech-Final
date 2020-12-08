<?php
require_once '../models/db_connect.php';

function getAllUsers(){
    $query = "select * from finaltask2user";
    return get($query);
}


 ?>