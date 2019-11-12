<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/projectfooter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pageL.css') }}" rel="stylesheet">
    <link href="{{ asset('css/project.css') }}" rel="stylesheet">
    <link href="{{ asset('css/projectnav.css') }}" rel="stylesheet">

    <title>Association</title>
</head>

<body>

    @include('./including.header')

    <div id="container">

        @include('./including.nav')
        <div class="title">
            <h1>Liste des associations</h1>
            <div>

                <div class="big">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.discordapp.com/attachments/641565047230824460/643806249355444242/bde.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="description" class="btn btn-primary">Description</a>
                            <a href="formulaireInscription.php" class="btn btn-primary">Inscription</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.discordapp.com/attachments/641565047230824460/643806249355444242/bde.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="description" class="btn btn-primary">Description</a>
                            <a href="formulaireInscription" class="btn btn-primary">Inscription</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.discordapp.com/attachments/641565047230824460/643806249355444242/bde.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="description" class="btn btn-primary">Description</a>
                            <a href="formulaireInscription" class="btn btn-primary">Inscription</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.discordapp.com/attachments/641565047230824460/643806249355444242/bde.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="description" class="btn btn-primary">Description</a>
                            <a href="formulaireInscription" class="btn btn-primary">Inscription</a>
                        </div>
                    </div>
                    <nav class="pages">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">

                                <li class="page-item"><a class="page-link" href="association">1</a></li>
                                <li class="page-item"><a class="page-link" href="association2">2</a></li>
                                <li class="page-item"><a class="page-link" href="">3</a></li>

                            </ul>
                        </nav>
                    </nav>
                </div>

            </div>


            <footer class="jean">



                <a href="#">Mentions légales</a>
                <a href="#">Contactez-nous</a>
                <a href="#">Menu</a>
                <a href="#">@Home</a>

            </footer>

</body>

</html>