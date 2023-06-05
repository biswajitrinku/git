<?php 
include("connection.php");
$query = "SELECT * FROM form";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
echo$total;
?>