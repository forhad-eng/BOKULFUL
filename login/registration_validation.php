<?php
include_once 'dbh.php';

if(isset($_POST['submit']))
{
    if($_POST['pass'] !== $_POST['cpass'])
    {
        header('location:..\registration.php');
    }else
    {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    }

    $sql = "SELECT * FROM login_data WHERE username = '$user'";
    $stmt = connect()->query($sql);
    $row = $stmt->fetch();

    if($row == true)
    {
        header('location:..\registration.php');
    }else
    {
        $sql = "INSERT INTO login_data(username,email,password) VALUES ('$user','$email','$pass')";
        $stmt = connect()->query($sql);
        header('location:..\..\login.php');
    }
}