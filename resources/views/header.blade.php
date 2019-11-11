<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ page_title($title ?? '')}}</title>
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
    margin-left: 3%;
}
.element:nth-child(4)
{
    order: 1;
}
    </style>
    <div id="conteneur">
        <h2 class="element">BDE cesi</h2>
        <h3 class='element'><a href="">{{isset($bt1) ? $bt1 : 'xc'}}</a></h3>
        <h3 class='element'><a href="">{{isset($bt2) ? $bt2 : 'cd'}}</a></h3>
        <img src="D:\application\GIT\web\web_project\resources\image\logo.png" alt="rien"class='element'>
    </div>
</header>
    @yield('contenu')

</body>
</html>