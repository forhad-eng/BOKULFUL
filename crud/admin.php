<?php
$user = 'admin';
$pass = 12345;

if(isset($_POST['submit']))
{
    if($user == $_POST['user']  &&  $pass = $_POST['pass'])
    {
        header('location:admin_curd.php');
    }else
    {
        header('location:admin.php');
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="..\login.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<body>

    <div class="container">
        <div class="Login-box">
            <div class="row">
                <div class="col-md-6 login_area">
                    <h2>Admin Login</h2>
                    <form method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" required placeholder="Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>