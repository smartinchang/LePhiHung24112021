<html>
	<head>
		<title>Connect and Read data from Database</title>
	</head>
	<body>
		<table>
		<tr>
			<td>UserID</td>
			<td>UserName</td>
			<td>Password</td>
		</tr>
		<?php
			// Create connection
			include "connection.inc";
			
			// Select data
			$sql = "SELECT * FROM Users";
			$result = $conn -> query($sql);
			
			// Display data
			if ($result -> num_rows > 0) {
				// output data of each row
				while ($row = $result -> fetch_assoc()) {
					echo "<tr><td>" . $row["UserID"] . "</td><td>" . $row["Username"]. "</td><td>" . $row["Password"]. "</td></tr>";
					//echo "id: " . $row["UserID"] . "  Username: " . $row["Username"]. " Password " .$row["Password"]. "<br>";
				}
			}
		?>
		</table>
	</body>
</html>