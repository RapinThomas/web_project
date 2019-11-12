var hostname = "localhost";
var port = 3000;

var express = require("express");
var app = express();

var users = require('../Controller/UsersController');

var Router = express.Router();

Router.route("/")
    // all permet de prendre en charge toutes les méthodes.
    .all(function (req, res) {
        users.index();
        /*bdd.query("SELECT * FROM users", function (error, rows, field) {
            if (!!error) {
                console.log('Error in the query');
            } else {
                console.log('SUCESS!\n');
                console.log(rows);
            }
        })*/
    });
Router.route("/users")
    .get(function (req, res) {
        users.show(req, res);
    })

    .post(function (req, res) {
        users.store(req, res);
    });

Router.route("/users/:users_id")
    .get(function (req, res) {
        let str = req.url;
        let table = (str.substr(1));
        users.show(req, res, req.params.users_id, table.split('/', 1));
    })

    .put(function (req, res) {
        users.update(req, res);
    })

    .delete(function (req, res) {
        users.delete(req, res);
    });

app.use(Router);

app.listen(port, hostname, function () {
    console.log("Mon serveur fonctionne sur http://" + hostname + ":" + port);
});