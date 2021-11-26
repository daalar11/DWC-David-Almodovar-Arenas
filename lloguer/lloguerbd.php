<?php
$conn = new mysqli("localhost", "root", "", "cases");
$stmt = $conn->prepare("SELECT * FROM lloguer ORDER BY id");
$stmt->execute();
$result = $stmt->get_result();

while($row = mysqli_fetch_array($result)) {
	echo "<option value='".$row['usuari']."'>".$row['usuari']." ".$row['id']."</option>";
}
?>