var bdd = require('../bdd');
var express = require("express");
var app = express();
class UserController {

    index() {
        res.json({
            message: "Bienvenue sur notre  API "

        });
    }

    show(req, res, user_id, table) {
        res.json({
            message: "Données possédant l'id : " + user_id,
        })
        bdd.query('SELECT * FROM ' + table + ' WHERE id= ' + user_id, function (error, rows, field) {
            if (!!error) {
                console.log('Error in the query');
            } else {
                console.log('SUCESS!\n');
                console.log(rows);
            }
        })

    }

    update(req, res) {
        res.json({
            message: "Modifier une données",
            methode: req.method
        });
    }

    delete(req, res) {
        res.json({
            message: "Supprimer une données",
            methode: req.method
        });
    }

    store(req, res) {
        res.json({
            message: "Ajoute une nouvelle données",
            methode: req.method
        });
    }
}
module.exports = new UserController;