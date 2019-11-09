
<?php

$bdd = new PDO(
    'mysql:host=localhost;dbname=prosit;charset=utf8',
    'root',
    ''
);
$query = $bdd->prepare('SELECT * FROM produits');
$query->execute();
$tab_Product = $query->fetchAll();
/*
foreach ($tab_Product as $product) :
    echo "<div class='displayprod'>
	<img src='" . "/" . $product['urlImage'] . "', class='prodpic' />
		<div class='price'> " . $product['prix'] . " € </div>
		<div class='description'> 
			" . $product['description'] . "
		</div>
	</div>";
endforeach;
*/
foreach ($tab_Product as $product) :
    echo "
<div class='singleArticle'>
<img class='image' src='" . "image/" . $product['urlImage'] . "' alt=''>

<div class='articleContent'>
    <h3>" . $product['description'] . "</h3>
    
    <a href='#' class='btn'><div class='price'> " . $product['prix'] . " € </div></a>
    </div>
    </div>";
endforeach;
?>