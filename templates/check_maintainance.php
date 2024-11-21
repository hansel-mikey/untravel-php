<?php 
$sql = "SELECT * FROM status";
$result = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_assoc($result);
if($data['data'] == false){
    header("Location: ./maintainance.php");
}
