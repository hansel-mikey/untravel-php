<?php 
include '../database.php';
$id = $_GET['id'];
if(empty($id)){
    header('location: notification.php');
}
$del = "DELETE FROM `notifications` WHERE id = $id";
$result = $mysqli->query($del);
if ($result) {
    header('location: notification.php');
}
