<!DOCTYPE html>
<html>
	<head>
		<title>Multi-Dimensional Arrays</title>
		<meta http-equiv="Content-Type" content = "text/html; charset=UTF-8"
	</head>
	<body>
		<?php
		$cars = array
			(
			array("Volvo", 22, 18),
			array("BMW", 15, 13),
			array("Kia", 5, 2),
			array("Land Rover", 17, 15),
			array("Toyota", 16, 18),
			array("Volkswagen", 20, 10),
			array("Audi", 19, 10),
			array("Mercedes Benz", 50, 5),
			array("Mazda", 11, 12),
			array("Ford", 14, 13),
			);

			echo "<table border =\"1\" style='border-collapse: collapse'>";
			echo '<tr><th>Brand name</th><th>Number of Stock in Store</th><th>Quantity Sold</th></tr>';

			foreach($cars as $cars)
			{
				echo '<tr>';
				foreach($cars as $key)
				{
					echo '<td>'.$key.'</td>';
				}
				echo '</tr>';
			}
			echo "</table>";
		?>
	</body>
</html>
