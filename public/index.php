<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="assets/vendors/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <script src="./assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <title>Czone</title>
    <link rel="icon" href="./image/blacktree.png" />
    <script src="./JS/main.js"></script>
</head>

<body>
    <header>
    <?php include("menu.php") ?>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./image/paysage1.jpg" class="d-block_w-100" alt="mug">
                </div>
                <div class="carousel-item">
                    <img src="./image/paysage2.jpg" class="d-block_w-100" alt="landscape">
                </div>
                <div class="carousel-item">
                    <img src="./image/paysage3.jpg" class="d-block_w-100" alt="man clothes">
                </div>
                <div class="carousel-item">
                    <img src="./image/paysage4.jpg" class="d-block_w-100" alt="woman clothes">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>




    <div id="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend, sapien a fringilla
            eleifend, leo justo rutrum neque, non imperdiet lacus elit vitae justo. Aliquam suscipit gravida nulla, in
            convallis diam auctor et. Proin pellentesque semper ipsum, sed rutrum dui venenatis ut. Fusce eleifend id
            nisi
            ac rutrum. Nam sit amet tellus semper, fermentum leo ut, lobortis justo. Praesent pharetra lacus nec blandit
            gravida. Curabitur a euismod leo. Vestibulum dictum semper facilisis. Pellentesque eu ante lacus. Donec
            ultricies, metus porta finibus bibendum, metus dolor accumsan nisi, non fringilla felis sapien et nisi.
            Mauris
            faucibus et neque ac porta. Nulla facilisi. Aenean congue, eros eget accumsan pulvinar, risus tortor
            bibendum
            libero, volutpat fringilla felis justo vitae velit. Mauris non ante tortor. In eget massa quis purus
            lobortis
            consectetur. Vivamus mattis purus consectetur, porta nisi nec, varius diam.

            Vivamus ac elementum nulla, at accumsan ipsum. Maecenas dolor quam, sollicitudin vitae commodo ut, fermentum
            in
            quam. Praesent sollicitudin suscipit dapibus. Integer vel hendrerit purus, eget luctus odio. Aenean eget
            cursus
            libero. Vestibulum at arcu quis enim semper ultricies in et lectus. In finibus enim vel diam vestibulum, sit
            amet elementum est dignissim. Nulla sit amet lectus porttitor, malesuada nibh sed, commodo arcu. Aenean
            elementum posuere libero, imperdiet vulputate nisl molestie in. Maecenas eleifend fringilla nibh, eu
            ullamcorper
            nisl efficitur sed. Nulla ut nisi tincidunt, vulputate mauris et, consectetur massa. Vestibulum ante ipsum
            primis in faucibus orci luctus et ultrices posuere cubilia Curae;

        </p>
    </div>


    <button id="bouton">voir plus</button>
    <footer>

          <?php include("footer.php") ?>

    </footer>

    <script>
        $(document).ready(function () {
            $(".hamburger").on("click", function () {
                $("nav ul").toggleClass("menu");
            });

        });


        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('scroll');
            }
            else {
                $('nav').removeClass('scroll');
            }
        })

        var liste = ["t-shirt", "shirt", "mug", "tablier", "tableau", "chaise", "biberon"]
        autocomplete(document.getElementById("search"), liste);

        var bouton = document.getElementById("bouton")
        bouton.addEventListener("click", clic)
        function clic() {
            $("#content").append("bienvenue <br />");
            ($("#content").append("bonjour <br />"));
        }
        function happend() {
            ($("#content").append("bonjour <br />"));
        }
        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 1) {
                intervalID = setTimeout(happend, 50);
            }
        });

    </script>
</body>

</html>

