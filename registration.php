<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include_once 'header.php';
?>

<div class="container">
    <div class="Login-box">
        <div class="row">
            <div class="col-md-6 login_area">
                <h2>Sign Up Here</h2>
                <form method="POST" action="login/registration_validation.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control" required placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpass" class="form-control" required placeholder="Confirm Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php
include_once 'footer.php';
?>