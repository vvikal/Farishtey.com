<?php include ("header.php")?>

	<div class="heading container"> 
		<h1>Details of Donors are here</h1>
	

    </div>
<?php

$conn = new mysqli("localhost", "root", "", "users"); 

$sql = "SELECT * FROM info";
$result = $conn->query($sql);?>
<div class="container">
	<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	
    	echo "<br>";
    	echo "<br>";
        echo "<strong>Name -</strong> " . $row["name"]; echo "<br>";
        echo "<strong> - Phone:</strong> " . $row["Phone"]; echo "<br>";
        echo " <strong>- Location:</strong> " . $row["Location"]; echo "<br>";
        echo " <strong>- Email: </strong>". $row['Email']; echo "<br>";
        echo " <strong>- Blood Group:</strong> ". $row['BG']; echo "<br>";
        echo " <strong>- RH Factor: </strong>". $row['RHFactor'];  echo "<br>";

    }
} else {
    echo "0 results";
}
$conn->close();

?>
</div>



 <?php include ("footer.php")?>