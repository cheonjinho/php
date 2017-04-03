<div>
<?php
	$con = mysqli_connect("localhost","root","wlsghcjs","users");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo "Connected" . "<br>"; 
	}

	$sql = "SELECT * FROM users";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
	        	echo "id: " . $row["id"]. " - Name: " . $row["type"]. " " . $row["date"]. "<br>";
		}
	} else {
	    echo "0 results";
	}
	$con->close();

?>



</div>
