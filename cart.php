<?php
	if(isset($_POST['submit'])) {

		foreach($_POST['quantity'] as $key => $val) {
			if($val == 0) {
				unset($_SESSION['cart'][$key]);
			} else {
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}

	}

?>

<h1>View Cart</h1>
<a href="index.php">Go back to products page</a>
<form method="post" action="index.php?page=cart" id="submitForm">
	<table>

		<tr>
			<th>Name</th>
				<th>Quantity</th>
				<th>Price per unit</th>
				<th>Total per type</th>
			</tr>

			<?php

				$sql="SELECT * FROM gallery WHERE id_product IN (";

					foreach($_SESSION['cart'] as $id => $value) {
						$sql.=$id.",";
					}

					$sql=substr($sql, 0, -1).") ORDER BY name ASC";
					$query=mysql_query($sql);
					$totalPrice=0;

					if (empty($row)) {
						error_reporting(0);
					}

					while($row=mysql_fetch_array($query)) {
						$subTotal=$_SESSION['cart'][$row['id_product']]['quantity']*$row['price'];
						$totalPrice+=$subTotal;


						?>

						<tr>
								<td><?php echo $row['name'] ?></td>
								<td><input type="text" name="quantity[<?php echo $row['id_product']?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td>
								<td><?php echo $row['price'] ?></td>
								<td><?php echo $_SESSION['cart'][$row['id_product']]['quantity']*$row['price']?></td>								
								<td><a href="#" onclick="removeItem(); return false;" name="clear">Delete</a></td>
								
						</tr>



						<?php

					}

			?>

			<tr>
				<td>Total Price:<?php echo $totalPrice ?></td>
			</tr>

	</table>
	<hr/>

	<button type="submit" name="submit">Update Cart</button>
</form>

<p>To remove an item set it's quantity to 0.</p>

<script type="text/javascript">
function removeItem() {
	$.ajax({ url: 'cart.php',
         data: {action: 'test'},
         type: 'post',
         success: function(output) {
                      alert(output);
                  }
});
}
</script>



