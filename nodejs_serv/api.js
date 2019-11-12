//L'application requiert l'utilisation du module Express.
//La variable express nous permettra d'utiliser les fonctionnalités du module Express.
var express = require("express");
// Nous créons un objet de type Express.
var app = express();
// Nous définissons ici les paramètres du serveur.
var hostname = "localhost";
var port = 3000;

var bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({
  extended: false
}));
app.use(bodyParser.json());

//Afin de faciliter le routage (les URL que nous souhaitons prendre en charge dans notre API), nous créons un objet Router.
//C'est à partir de cet objet Router, que nous allons implémenter les méthodes.
var Router = express.Router();

Router.route("/")
  // all permet de prendre en charge toutes les méthodes.
  .all(function (req, res) {
    res.json({
      message: "Bienvenue sur notre  API ",
      methode: req.method
    });
  });
// Je vous rappelle notre route (/articles).
Router.route("/articles/:articles_id")
  // J'implémente les méthodes GET, PUT, UPDATE et DELETE
  // GET
  .get(function (req, res) {
    res.json({
      message: "Liste toutes les données" + req.params.articles_id,
      methode: req.method
    });
  })
  //POST
  .post(function (req, res) {
    res.json({
      message: "Ajoute une nouvelle données" + req.params.articles_id,
      methode: req.method,
      body: req.body,
    });
  })
  //PUT
  .put(function (req, res) {
    res.json({
      message: "Mise à jour des informations d'une données" + req.param.articles_id,
      methode: req.method
    });
  })
  //DELETE
  .delete(function (req, res) {
    res.json({
      message: "Suppression d'une données" + req.param.articles_id,
      methode: req.method
    });
  });

// Nous demandons à l'application d'utiliser notre routeur
app.use(Router);

// Démarrer le serveur
app.listen(port, hostname, function () {
  console.log("Mon serveur fonctionne sur http://" + hostname + ":" + port);
});