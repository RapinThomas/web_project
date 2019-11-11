var express = require('express');
var app = express();
var mysql = require('mysql');

var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'prosit_laravel'
});

connection.connect(function (error) {
    if (!!error) {
        console.log('Error');
    } else {
        console.log('Connected');
    }
});
app.get('/', function (req, resp) {
    connection.query("SELECT *FROM users", function (error, rows, field) {
        if (!!error) {
            console.log('Error in the query');
        } else {
            console.log('SUCESS!\n');
            console.log(rows);
        }
    })
})
app.listen(3000);