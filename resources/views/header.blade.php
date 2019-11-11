<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre')</title>
</head>
<body>
<header>
    <style type="text/css">
    header{
        background-color: aqua;
    }
    .logo{
        background-image: url(D:\dossier bureau\Annee2\Web\image\logo.png);
        background-repeat: no-repeat;
    }
    #conteneur{
    display: flex;
    flex-wrap: wrap;
    
    }

    .element:nth-child(1)
{
    order: 2;
   justify-content: center;
    margin: auto;
}
.element:nth-child(2)
{
    order: 3;
    text-align: right;
}
.element:nth-child(3)
{
    order: 4;
}
.element:nth-child(4)
{
    order: 5;
}
.element:nth-child(5)
{
    order: 1;
}
    </style>
    <div id="conteneur">
        <h2 class="element">BDE cesi</h2>
        <h3 class='element'><a href="">Se déconnecter/</a></h3>
        <h3 class='element'><a href="">Panier/</a></h3>
        <h3 class='element'><a href="">Profil</a></h3>
        <img src="D:\application\GIT\web\web_project\resources\image\logo.png" alt="rien"class='element'>
    </div>
</header>
    @yield('contenu')

</body>
</html>