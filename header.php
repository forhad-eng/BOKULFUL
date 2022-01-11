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
                    <a class='nav-link' href='login.php'>Login</a>
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
            <div class="dropdown">
                <button class="dropbtn">
                    <a class="dropbtn" href="Chekout.php" style="text-decoration: none">Chekout</a>
                </button>
            </div>
        </div>
    </nav>

</section>
