<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Plant Goal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php
    include_once 'header.php';
?>
<!------------------------------banner------------------------->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                if (isset($_SESSION['username']))
                {
                    echo "<h2>Hello ".$_SESSION['username'] ."!"."</h2>";
                }
                if (isset($_GET['error']) == 'loginReq')
                {
                    echo "<h2>Please Login To Make Purchase</h2>";
                }
                ?>
                <p class="promo-title">We want to protect our world</p>
                <p>The Sustainable Development Goals (SDGs) are the UN’s blueprint for a more sustainable future for all. Their adoption put environmental degradation, sustainability, climate change, and water security under the international spotlight. The global goals aim to leave no one behind and are vital to achieving CDP’s vision for a thriving economy that works for people and planet.</p>
                <a href="#"></a>
            </div>

            <div class="col-md-6 text-center">
                <img src="images/flower2.jpg" class="img-fluid">
                <p class="text-title"></p>
        </div>
            <div class="d">
            <a href="images/Diagram.PNG">Diagram</a>
        </div>
    </div>
    </div>
    </section>

   <section>

    <div id="mainSlider" class="carousel slide" data-ride="carousel" data-interval="1500">
        <ol class="carousel-indicators">
            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="1"></li>
            <li data-target="#mainSlider" data-slide-to="2"></li>
            <li data-target="#mainSlider" data-slide-to="3"></li>
            <li data-target="#mainSlider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Cover%206.png" class="w-100" height="500" alt=""/>
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="images/nature%20blue%201.jpg" class="w-100" height="500" alt=""/>
                <div class="carousel-caption">
                    <h3>We Want to protect our world </h3>
                    <p>Life is wonderful</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/nature%207.jpg" class="w-100" height="500" alt=""/>
                <div class="carousel-caption">
                    <h3>We Want to protect our world</h3>
                    <p>Life is wonderful</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Cover%204.png" class="w-100"  height="500"  alt=""/>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/nature.jpg" class="w-100"  height="500"  alt=""/>
                <div class="carousel-caption">
                    <h3>We Want to protect our world</h3>
                    <p>Life is wonderful</p>
                </div>
            </div>
        </div>
        <a href="#mainSlider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#mainSlider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


</section>

<section id="services">
    <div class="container text-center">
        <h1 class="title">WHAT WE DO ?</h1>
        <div class="row text-center">
            <div class="col-md-4 services">
               <a href=""><img src="images/Onilne%20service.png" class="service-img"></a>
                <h4>Best Online Service</h4>
                <p></p>

            </div>
            <div class="col-md-4 services">
                <a> <img src="images/LAND.png" class="service-img"></a>

                <h4>Land Lease For Planting</h4>
                <p></p>

            </div>
            <div class="col-md-4 services">
                <a><img src="images/home%20delivery.png" class="service-img"></a>

                <h4>Home Delivery</h4>

                <p>within 3days</p>

            </div>
        </div>

    </div>
</section>



<!--------About Us----->
<section id="about-us">
    <div class="container">
        <h1 class="title text-center">WHY CHOOSE US ?</h1>
        <div class="row">
            <div class="col-md-6 about-us">
                <ul>
                    <li>To protect our world</li>
                    <li>Provide the best online services</li>
                    <li>We Want to make our environment safe & blessul </li>
                    <li>Wanted to create a beautiful city</li>

                </ul>

            </div>
            <div class="col-md-6 ">
                <img src="images/tree%20plantation%204.jpeg" class="img-fluid">
            </div>

        </div>
    </div>
</section>


<!---Testimonials---->


<section id="our-product">
    <div class="container">
        <h1 class="title text-center">WHAT PEOPLE SAY?</h1>
        <div class="row ">
            <div class="col-md-4 testimonials">
                <p>I am so much happy to become a part of online nursery chittagong </p>
               <a href=""><img src="images/Forhad.png"></a>
                <p class="user-details"><b>Forhad Uddin</b><br>Co-Founder of Online Nursery Chittagong</p>
            </div>
            <div class="col-md-4 testimonials">
                <p>I am so much happy to become a part of online nursery </p>
               <a href=""><img src="images/abdullah.jpg"></a>
                <p class="user-details"><b>Forhad Uddin</b><br>Co-Founder of Online Nursery Chittagong</p>
            </div>
            <div class="col-md-4 testimonials">
                <p>I am so much happy to become a part of online nursery</p>
                <a href=""><img src="images/Forhad.png"></a>
                <p class="user-details"><b>Forhad Uddin</b><br>Head of President at online Nursery Chittagong</p>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>