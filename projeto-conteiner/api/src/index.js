const express = require('express');
const mysql = require('mysql');

const app = express();
 const connection = mysql.createConnection({
    host: 'mysql-conteiner', 
    user: 'root',
    password: 'adaconteiner', 
    database: 'Loja'
 });

connection.connect();

app.get('/produtos', function(req, res) {
    connection.query('SELECT * FROM produtos', function (erro, results) {
        if (error) {
            throw error
        };

        res.send(results.map(item => ({ nome: item.nome, preco: item.preco}
          )));
    });
});


app.listen(9001, '0.0.0.0', function() {
    console.log('Listening on port 9001');
})

