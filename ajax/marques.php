<?php

$conn = new mysqli("localhost", "root", "", "concesionari");
$stmt = $conn->prepare("SELECT * FROM marca");
$stmt->execute();
$result = $stmt->get_result();

while($row = mysqli_fetch_array($result)) {
    echo "<option value='".$row['id']."'>".$row['nom']."</option>";

}
echo "</table>";
mysqli_close($conn);
?>