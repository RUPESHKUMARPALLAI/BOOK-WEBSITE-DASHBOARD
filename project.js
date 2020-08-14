

//let http = require('http');
let fs = require('fs');
var mysql = require('mysql');
//const express = require('express');
//const app = express();




var s=1;

var con = mysql.createConnection({
  host: "localhost",
  user: "username",
  password: "password",
  database: "book_portal"
});

 con.connect(function(err) {
  if (err) throw err;
  if(s==1)
  var sql = "DELETE FROM booksig WHERE oname = '' AND bname='' ";
  if(s==2)
  var sql = "DELETE FROM books WHERE  oname = '' AND bname='' ";
  if(s==3)
  var sql = "DELETE FROM booksr WHERE  rname= '' AND bname='' "; 
  con.query(sql, function (err, result) {
    if (err) throw err;
 console.log("Number of records deleted: " + result.affectedRows);
  
    });

});

