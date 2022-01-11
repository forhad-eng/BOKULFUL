<?php
include_once 'dbh.php';
session_start();
if(isset($_POST['submit']))
{

        $user = $_POST['user'];
        $pass = $_POST['pass'];

    $sql = "SELECT * FROM login_data WHERE username = '$user'";
    $stmt = connect()->query($sql);
    $row = $stmt->fetch();

    if($user == $row['username'] && $pass == $row['password'])
    {
        header('location:../index.php');
        $_SESSION['username'] = $user;
    }else
    {
        header('location:../login.php?error=wrongInput');
    }
}