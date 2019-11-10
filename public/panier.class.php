<?php
class panier
{
    private $DB;
    public function __construct($DB)
    {
        if (!isset($_SESSION)) {
            session_start();
        };

        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }
        $this->DB = $DB;
        if (isset($_GET['delPanier'])) {

            $this->del($_GET['delPanier']);
        }
        if (isset($_POST['panier']['quantity'])) {
            $this->recalc();
        }
    }
    public function recalc()
    {
        //on empêche a l'utilisateur de soumettre de fausses valeurs 
        foreach ($_SESSION['panier'] as $product_id => $quantity) {
            if (isset($_POST['panier']['quantity']['$product_id'])) {
                $_SESSION['panier'][$product_id] = $_POST['panier']['quantity'][$product_id];
            }
        }
        $_SESSION['panier'] = $_POST['panier']['quantity'];
    }
    public function count()
    {
        return array_sum($_SESSION['panier']);
    }
    public function total()
    {
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        if (empty($ids)) {
            $products = array();
        } else {
            $products =  $this->DB->query('SELECT id, prix FROM produits WHERE id IN (' . implode(',', $ids) . ')');
        }
        foreach ($products as $product_id =>  $product) {
            $total += $product->prix * $_SESSION['panier'][$product->id];
        }
        return $total;
    }

    public function add($product_id)
    { // on teste si le taleau contenant les articles est vide ou non ce qui nous permettra d'avoir la qtité de produits
        if (isset($_SESSION['panier'][$product_id])) {
            $_SESSION['panier'][$product_id]++;
        } else {
            $_SESSION['panier'][$product_id] = 1;
        }
    }
    public function del($product_id)
    {
        unset($_SESSION['panier'][$product_id]);
    }
}
