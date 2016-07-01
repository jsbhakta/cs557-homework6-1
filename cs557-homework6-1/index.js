#!/usr/bin/env node

// loading express.js and http server
var express = require('express');
var http = require('http');

// creating express.js app
var app = express();

// setting server/app port, by default we will use 3000
// value of port should be received from environment using process.env.PORT
var port = process.env.PORT || '6666';
app.set('port', port);

// serving static files, like images, audio, video and more...
app.use(express.static(__dirname + '/public'));

// creating http server and running our app
var server = http.createServer(app);
server.listen(port); 

// just message to show
console.log("Open http://127.0.0.1:6666");  

// HERE WE WILL SERVE OUR PAGES

// GET /
app.get('/', function (req, res) {
  res.sendFile(__dirname + '/index.html');
});

// GET /salem
//app.get('/salem', function (req, res) {
  //res.sendFile(__dirname + '/salem.html');
//});-->