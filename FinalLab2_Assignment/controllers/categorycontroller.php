<?php
    require_once "../models/db_connect.php";
	
	function getAllCategories()
	{
		$query = " Select * FROM catagories";
		 $result= get($query);
		 return $result;
	}
?>