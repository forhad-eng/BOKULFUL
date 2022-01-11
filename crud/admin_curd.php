<?php
    include_once '../login/dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="admin_curd.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="Login-box">
        <div class="row">
            <div class="col-md-6 login_area">
                <table border="2">
                    <tr style="color: #f9f9f9; text-align: center">
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM login_data";
                    $stmt = connect()->query($sql);
                    while($row = $stmt->fetch())
                    {
                       ?>
                            <tr style="text-align: center;font-size: 18px">
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['username']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['password']?></td>
                                <td><a href="edit_data.php?id=<?php echo $row['id']?>">Update</a></td>
                                <td><a href="delete_data.php?id=<?php echo $row['id']?>">Delete</a></td>
                            </tr>
                        <?php
                    }

                    ?>

                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>