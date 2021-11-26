<?php

$marca = $_REQUEST['marca'];
$conn = new mysqli("localhost", "root", "", "concesionari");
$stmt = $conn->prepare("SELECT * FROM cotxo WHERE marca=".$marca);
$stmt->execute();
$result = $stmt->get_result();

echo "<table border='1'>
<tr>
<th>NOM</th>
<th>PORTES</th>
<th>PREU</th>
<th>MATRICULA</th>
<th>COLOR</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['matricula'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['portes'] . "</td>";
    echo "<td>" . $row['preu'] . "</td>";
    echo "<td>" . $row['color'] . "</td>";
    echo "<td>" . $row['marca'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>