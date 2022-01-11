<?php
include_once '../login/dbh.php';
$id = $_GET['id'];
$sql = "SELECT * FROM login_data WHERE id = '$id'";
$stmt = connect()->query($sql);
$result  = $stmt->fetch();

if(isset($_POST['submit']))
{
    if($_POST['pass'] !== $_POST['cpass'])
    {
        header('location:edit_data.php');
        die();
    }else
    {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    }

    $sql = "SELECT * FROM login_data WHERE username = '$user'";
    $stmt = connect()->query($sql);
    $row = $stmt->fetch();

    if($user == $row['username'])
    {
        header('location:edit_data.php');
    }else
    {
        $sql = "UPDATE login_data SET username = '$user',email = '$email',password = '$pass' WHERE id = '$id'";
        $stmt = connect()->query($sql);
        header('location:admin_curd.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Data</title>
    <link rel="stylesheet" type="text/css" href="admin_curd.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="Login-box">
        <div class="row">
            <div class="col-md-6 login_area">
                <h2>Data Update</h2>
                <form method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required placeholder="<?php echo $result['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required placeholder="<?php echo $result['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control" required placeholder="<?php echo $result['password'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpass" class="form-control" required placeholder="Confirm Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>