const express = require('express');
const app = express();
var bodyParser = require('body-parser');

const connectDB = require('./connection');
connectDB();

app.use(bodyParser.json()); 
app.use(bodyParser.json({ type: 'application/vnd.api+json' })); 
app.use(bodyParser.urlencoded({ extended: true })); 


//require('./app/routes')(app); // configure our routes

//app.use(express.json({ extended: false }));
//app.use('/api/userModel', require('./Api/User'));


app.get("/", function(req, res){
    res.sendFile(__dirname+'/index.html');
});

app.get("/register.html", function(req, res){
  res.sendFile(__dirname+'/register.html');
});

const Port = process.env.Port || 3000;

app.listen(Port, () => console.log('Server started'));

//exports = module.exports = app;                         

