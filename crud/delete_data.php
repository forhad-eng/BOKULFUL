<?php
include_once '../login/dbh.php';
$id = $_GET['id'];
$del = "DELETE FROM login_data WHERE id = '$id'";
$stmt = connect()->query($del);
header('location:admin_curd.php');
?>