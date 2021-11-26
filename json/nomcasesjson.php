<?php
header("Content-Type: application/json; charset=UTF-8");
$id=$_REQUEST['casa'];
$conn = new mysqli("localhost", "root", "", "cases");
$stmt = $conn->prepare("SELECT id,nomcasa FROM cases where id=$id");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>