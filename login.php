<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="login.css">
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
<?php
if (isset($_GET['error']) == 'wrongInput')
{
    echo "<h5 style='color:#330867 ;font-weight: 500'>Username or password is incorrect!</h5>";
}

?>
    <div class="container">
        <div class="Login-box">
            <div class="row">
                <div class="col-md-6 login_area">
                    <h2>Login Here</h2>
                    <form method="POST" action="login/login_validation.php">
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
                    <p>Don't have any account? <a href="registration.php"> Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
include_once 'footer.php';
?>