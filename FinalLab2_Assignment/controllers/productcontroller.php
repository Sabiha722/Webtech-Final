<?php
    require_once "../models/db_connect.php";
	if(isset($_POST["add_product"]))
	{
		$hasError=False;
		if(!$hasError)
		{
			$fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
			$file="../storage/product_images/".uniqid().".$fileType";
			move_uploaded_file($_FILES["image"]["tmp_name"],$file);
			addProduct($_POST["name"],$_POST["price"],$_POST["qty"],$_POST["desc"],$file,$_POST["category_id"]);
			header("Location:allproducts.php");
		}
	}
	function addProduct($name,$price,$qty,$desc,$image,$c_id)
	{
		$query = "INSERT INTO products (id,name,price,quantity,description,image,catagory_id) VALUES (NULL,'$name','$price','$qty','$desc','$image','$c_id')";
		execute($query);
	}
	function getAllProducts()
	{
		$query="Select * FROM products";
		$result = get($query);
		return $result;
	}
?>