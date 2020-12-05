<?php include 'admin_header.php';
      require_once"../controllers/ProductController.php";
	  $products = getAllProducts();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		<?php
			foreach($products as $p)
			{
				echo"<tr>";
					echo "<td>".$p["id"]."</td>";
					echo "<td>".$p["name"]."</td>";
					echo "<td>".$p["catagorie_id"]."</td>";
					echo "<td>".$p["price"]."</td>";
					echo "<td>".$p["quantity"]."</td>";
					echo"<td><img src='".$p["image"]."'width='30px' height='30px'></td>";
					echo'<td><a href="editproduct.php" class="btn btn-success">Edit</a></td>';
					echo'<td><a class="btn btn-danger">Delete</td>';
					
				echo"</tr>";
			}
		?>
			
			
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>