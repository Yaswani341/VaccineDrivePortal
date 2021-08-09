const express = require('express');
const app = express();
const mongoose = require('mongoose');
var bodyParser = require('body-parser');
var router = express.Router();
const ejs = require('ejs');
app.set('view engine', 'ejs');

const connectDB = require('./connection');
connectDB();

app.use(bodyParser.json()); 
app.use(bodyParser.json({ type: 'application/vnd.api+json' })); 
app.use(bodyParser.urlencoded({ extended: true })); 

const Port = process.env.Port || 3000;
app.listen(Port, () => console.log('Server started'));

//get functions
app.get("/", function(req, res){
  res.sendFile(__dirname+'/index.html');
});

app.get("/index.html", function(req, res){
    res.sendFile(__dirname+'/index.html');
});

app.get("/register.html", function(req, res){
  res.sendFile(__dirname+'/register.html');
});

app.get('/status.ejs', (req, res) => {
  UserModel.find({}, function(err, user) {
      res.render('status', {
          userDetails: user
      })
  })
})
//end of get functions...

const userSchema = {
  aadhar: String,
  name: String,
  address: String,
  contact: Number,
  dose1: String,
  dose2: String
}
const UserModel = mongoose.model('user', userSchema);

app.post('/register.html', function(req, res) {
  let newUser = new UserModel({
      aadhar: req.body.aadhar,
      name: req.body.name,
      address: req.body.address,
      contact: req.body.contact,
      dose1: "NO",
      dose2: "NO"
  });

  newUser.save();
})

