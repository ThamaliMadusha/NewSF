<?php
		//databas query
		$result = mysqli_query($conn,"SELECT * FROM technecians WHERE field='electronic'");
		if (!$result) {
			die("Database query failed: " . mysqli_error($conn));
		}
		echo "<table border=1>
					<tr>
						<td>Name</td>
						<td>Address</td>
						<td>Contact No.</td>
					</tr>";
		// 4. Use returned data
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>
					<td>{$row['name']}</td>
					<td>{$row['address']}</td>
					<td>{$row['phone']}</td>
				</tr>";  
		}
		echo "</table>";
		?>

		hi