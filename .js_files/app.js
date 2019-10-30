var express = require("express");
var app = express();
var port = 3000;
var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

var mongoose = require("mongoose");
mongoose.Promise = global.Promise;
mongoose.connect("mongodb://localhost:27017/node-demo");
var nameSchema = new mongoose.Schema({
    name: String,
    emailId: String,
    date_of_birth:String,
    recommendation:String,
    Usage:String,
    comments:String,
    Speed:String,
    Reliability:String,
    Efficency:String
});
var User = mongoose.model("moontaxi", nameSchema);

app.get("/", (req, res) => {
    res.sendFile(__dirname + "/index.html");
});

app.post("/addname", (req, res) => {
    var myData = new User(req.body);
    myData.save()
        .then(item => {
            //res.send("Your reponse has been save. <a href='http://localhost/moontaxi/Home2.php'>Click here to go back to home page</a>");
            res.send("<script> window.location.href = 'http://localhost/moontaxi/Home2.php';</script>");
            //res.redirect(301, 'http://localhost/moontaxi/Home2.php');
            
        })
        .catch(err => {
            res.status(400).send("Unable to save to database");
        });
});

app.listen(port, () => {
    console.log("Server listening on port " + port);
});

