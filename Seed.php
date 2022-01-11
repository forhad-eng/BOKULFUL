<?php
session_start();

require_once ('./php/component.php');
require_once ('./php/CreateDb.php');

$database = new Dbh();
$database->connect('seed');

if (isset($_POST['add'])) {
    if(isset($_SESSION['username'])){
        if (isset($_SESSION['Cart']))
        {
            $item_array_id = array_column($_SESSION['Cart'], 'product_id');
            if (in_array($_POST['product_id'], $item_array_id))
            {
                if(count($item_array_id) == 8)
                {
                    echo "<script>alert('Cart is full...')</script>";
                    echo "<script>window.location = 'cart.php'</script>";
                }else
                {
                    echo "<script>alert('Product is Already in the Cart...')</script>";
                    echo "<script>window.location = 'Seed.php'</script>";
                }
            }
            else {
                //$count = count($_SESSION['Cart']); //Count the Current size of array before assigning a new array->($_SESSION['Cart'][0])->size = 1,So $count = 1.
                $item_array = array
                (
                    'product_id' => $_POST['product_id']
                );
                array_push($_SESSION['Cart'],$item_array);
                //$_SESSION['Cart'][$count] = $item_array;
            }
        } else {
            $item_array = array
            (
                'product_id' => $_POST['product_id']
            );
            $_SESSION['Cart'][0] = $item_array;
        }
    }else
        {
            header('location:index.php?error=loginReq');
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="cart.css">
</head>
<body>

<?php
require_once ('php/header.php');
?>
<div class="container">
    <div class="row text-center py-5">
        <?php
           $result = $database->get_SeedData('seed');
            while($row = mysqli_fetch_assoc($result))
            {
                Seed_component($row['product_name'],$row['product_description'],$row['before_price'],$row['product_price'],$row['product_image'],$row['id']);
            }

         ?>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>