<?php
	include "db.php";
	include "header.php";
	include "menu.php"; 

	$sql = "SELECT * FROM bodyinfo";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<table class='table table-striped'>";
		echo "<tr><td>編號</td><td>姓名</td><td>身高</td><td>體重</td></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["id"] . "</td>";
			echo "<td>" . $row["name"] . "</td>";
			echo "<td>" . $row["height"] . "</td>";
			echo "<td>" . $row["weight"] . "</td>";
	    	echo "</tr>";
	  	}
	  	echo "</table>";
	} else {
	  	echo "0 results";
	}
	$conn->close();
	
	echo "<hr>";
	include "footer.php";
?>