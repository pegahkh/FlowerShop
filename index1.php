<!DOCTYPE html>
<html lang="en-US">
<?php include ( 'function.php')?>
<?php include ( 'flower.php') ?>

<head>

    <title>LilyOnline</title>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
    <meta name="description" content="LilyOnline Flower">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,jquery">
    <meta name="author" content="Pegah">
    <meta http-equiv="refresh" content="360">

    <link rel="stylesheet" type="text/css" href="css/slidePic.css" />
    <link rel="stylesheet" type="text/css" href="css/flower1.css" />

</head>

<body>

    <div class="main_wrapper">
        <!-- headerlogo -->
        <div id='logo'>
            <img src="calla1.jpg" alt="calla" width='250' height='120' />
		</div>
			
        <!-- header -->

        <div>
            <h2>LiLy Flower Shop</h2>
        </div>

        <span id="phoneHeader">
			<img src="tel.jpg" alt="phoneHeader" width='30' height='30' />
			<span id="phone">For phone order, or help choosing flowers call: <b>1800 5024 22</b>
            </span>

		</span>

        <!-- main menue -->
        <div id="nav">
            <ul id="tabs">
                <li><a href="index1.php">Home</a></li>

                <li><a href="#">Contact</a></li>

                <li><a href="#">Help</a></li>

                <li><a href="#">About us</a></li>

                <li><a href="flowerLoginf.php">Login</a></li>

                <li>
                    <form method="get" action="result.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" />
                        <input type="submit" name="search" value="search" />
                    </form>
                 </li>
                        
            </ul>
        </div>

        <!-- make a side bar -->
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>

            <ul id="cats">
                <?php getcat(); ?>
            </ul>
            <div id="sidebar_title1">Price</div>
            <ul id="cats">
                <?php getprice(); ?>
            </ul>
        </div>
        
        <!-- Jquery for Slide show on the middle -->
        <div id='content_wrapper'>
            <div class="slider">
                <ul class="slides">

                    <li class="Slide"><img src="1.jpg" alt="pic1" /></li>
                    <li class="Slide "><img src="2.jpg" alt="pic2" /></li>
                    <li class="Slide "><img src="3.jpg" alt="pic3" /></li>
                    <li class="Slide "><img src="4.jpg" alt="pic4" /></li>
                    <li class="Slide "><img src="5.jpg" alt="pic5" /></li>
                    <li class="Slide "><img src="6.jpg" alt="pic6" /></li>
                    <li class="Slide"><img src="7.jpg" alt="pic7" /></li>

                </ul>
            </div>

            <!-- Function for Jquery Slide -->
            <script src="js/jquery.js"></script>
            <script>
                $(function() {
                    //configuration
                    var width = 950;
                    var animation = 1000;
                    var pause = 4000;
                    var currentSlide = 1;

                    //cache DOM
                    var $slider = $('.slider');
                    var $slideContainer = $slider.find('.slides');
                    var $Slide = $slideContainer.find('.Slide');

                    //copy slide1 to last
                    $slideContainer.append($Slide.first().clone());
                    var interval;

                    function startSlide() {
                        interval = setInterval(function() {

                            $('.slider .slides').animate({
                                    'margin-left': '-=' + width
                                }, animation,

                                function() {
                                    ++currentSlide;
                                    if (currentSlide === $Slide.length + 1) {
                                        currentSlide = 1;
                                        $slideContainer.css('margin-left', 0);
                                    }
                                });
                        }, pause);
                    }

                    function stopSlide() {
                        clearInterval(interval);
                    }
                    $slideContainer
                        .on('mouseenter', stopSlide)
                        .on('mouseleave', startSlide);
                    startSlide();
                });
            </script>

            <div id='product_box'>

                <?php getpro();?>
                <?php getpro_cat();?>
                <?php getprice_Cat();?>

            </div>

                               

        </div>

        <!-- make a Footer -->
        <div id='footer'>
            Copyright© Call Lili Only 2016. All rights reserved.
        </div>

    </div>
</body>

</html>
           
