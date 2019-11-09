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
    </header>
    <h1>champ de recherche</h1>
    <form class="search_bar">
        <input type="search" id="search" name="search" placehorlder="Recherche..." />
    </form>

    <div id="news">
        <p>zboubi zboubi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend, sapien a fringilla
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

            Integer tincidunt quam at faucibus vestibulum. Duis non elit non nulla varius tincidunt. Vestibulum et dui
            consequat, rhoncus turpis vitae, blandit ipsum. Quisque pulvinar, libero vitae rutrum iaculis, purus enim
            molestie tellus, vitae iaculis quam erat at lectus. Aliquam imperdiet nec ex eget blandit. Phasellus at
            luctus
            dui. Sed vel commodo nibh.

            Donec tincidunt sem dictum sem imperdiet, eu porta urna suscipit. Nunc malesuada velit risus, in rhoncus
            elit
            fermentum a. Nunc dapibus dolor sit amet lacinia malesuada. Nam ut metus imperdiet, rhoncus metus quis,
            feugiat
            quam. Duis commodo sem imperdiet ex vulputate, eu luctus nisi vestibulum. Etiam feugiat, justo eget
            venenatis
            suscipit, ante dolor placerat lorem, sed mollis tortor dui sed ante. Morbi ullamcorper lorem in eros
            fringilla,
            sed condimentum tortor malesuada. Nulla non laoreet metus, eu porta ante.</p>


    </div>
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

    </script>
</body>

</html>