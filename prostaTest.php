<?php
	
	connection_to_db();	

function connection_to_db()
{
	$servername = "localhost";
	$username = "root";
	$password = "1";
	$name = "gm_uzbekistan_cars";

	$conn = new mysqli($servername, $username, $password, $name, "3306");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	else {
		
			$car_details = array();
			$query = 'select t.name as name from cars t where t.id = 1';
			echo "$query";

		    $result = $conn->query($query);
		   
		    if ($result -> num_rows > 0) {
		    	while ($row = $result->fetch_assoc()) {
		    		$car_details[0] = $row["name"];
		    		$car_details[1] = $row["speed"];
		    		$car_details[2] = $row["fuel"];
		    		$car_details[3] = $row["power"];
		    		$car_details[4] = $row["fuel_per_km"];
		    		$car_details[5] = $row["type"];
		    		$car_details[6] = $row["price"];
		    		$car_details[7] = $row["img_path"];
		    		echo $car_details[0];
		    	}
			}
		$conn->close();
	}
}

?>