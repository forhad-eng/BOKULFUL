<?php
require_once ('php/CreateDb.php');

$db = new Dbh();
$db->connect('seed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="cart.css">
</head>
<body>

<!----Header---->

<?php
session_start();
?>
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="images/tree-plantation%20logo.png"> </a>
        <p class="Oxygen"><a href="index.php" style="text-decoration: none"> Bokulful Nursery Mart </a></p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#services">Services</a>
                </li>
                <?php
                if (isset($_SESSION['username']))
                {
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='login/logout.php'>Logout</a>
                    </li>";
                }else
                {
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='login.php'>Log In</a>
                    </li>";
                }
                ?>
            </ul>
            <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                    <section class="seed1"><a href="Seed.php" style="text-decoration: none">Seed</a></section>
                    <section class="medi"><a href="Medi_Plants.php" style="text-decoration: none">Medicinal Plants</a></section>
                    <section class="fruit"> <a href="Fruit_Plants.php" style="text-decoration: none">Fruit Plants</a></section>
                    <section class="flower"> <a href="Flower_plants.php" style="text-decoration: none">Flower Plants</a></section>
                    <section class="otherP"> <a href="other_plants.php" style="text-decoration: none">Other Plants</a></section>
                    <section class="tub"><a href="Tub.php" style="text-decoration: none">Tub</a></section>
                    <section class="compost"> <a href="compost.php" style="text-decoration: none">Compost</a></section>
                    <section class="otherEq"> <a href="oherEq.php" style="text-decoration: none">Other Equipments</a></section>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    <a class="dropbtn" href="cart.php" style="text-decoration: none">Cart</a>
                </button>
            </div>
        </div>
    </nav>

</section>

<!-----CheckOut------>

<div class="row">
    <div class="col-75">
        <div class="Checkout">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Forhad Uddin">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="abc@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="20/27 Bashundhara Chittagong">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Chittagong">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">Division</label>
                                <input type="text" id="state" name="state" placeholder="Chittagong">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="4200">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-Checkout">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Forhad Uddin">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">

                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2022">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>

    <div class="col-25">
        <div class="Checkout">
            <div class="container-fluid">
                <div class="row px-5">
                    <div class="col-md-7">
                        <div class="shopping-cart">
                            <?php
                            $total = 0;
                            if (isset($_SESSION['Cart'])){
                                $product_id = array_column($_SESSION['Cart'],'product_id');

                                $result = $db->get_MediData('medicinal_plants');
                                $result1 = $db->get_SeedData('seed');

                                while($row = mysqli_fetch_assoc($result) OR $row = mysqli_fetch_assoc($result1)){
                                    foreach ($product_id as $id){
                                        if ($row['id'] == $id){
                                            $total = $total + (int)$row['product_price'];
                                        }
                                    }
                                }
                            }else{
                                echo "<h4 style='color: red'>Cart is Empty!</h4>";
                            }
                            ?>
                        </div>
                    </div>

                    <?php
                    if (isset($_SESSION['username'])) {
                        if (isset($_SESSION['Cart'])) {
                            $count = count($_SESSION['Cart']);
                            echo checkElement($count,$total);
                    }}
                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
function checkElement($count,$total)
{
    $elements =
        "
         <div class='pt-1'>
                        <h6 style='text-align: center;margin-left: 30px'>DETAILS</h6>
                        <hr style='text-align: center;margin-left: 30px'>
                        <div class='row price-details'>
                        <div class='col-md-6'>
                            <h6>Products</h6>
                            <h6>Price</h6>
                        <h6>Charges</h6>
                        <hr style='margin-left: 3px'>
                        <h6>Payable</h6>
                        </div>
                        <div class='col-md-6'>
                        <h6 style='text-align: center;margin-left: 30px'>($count)</h6>
                        <h6 style='text-align: center;margin-left: 30px'>$$total</h6>
                        <h6 class='text-success' style='text-align: center;margin-left: 30px'>FREE</h6>
                        <hr>
                                    <h6 style='text-align: center;margin-left: 30px'>$$total</h6>

        ";
    return $elements;
}