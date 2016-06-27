var express =require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io').listen(server);
//include mangoose Module of mangoDB
var mongoose = require('mongoose');

users = [];
connections = [];
server.listen(process.env.PORT || 8080);
console.log("server running ....");

//Mangoose connection
mongoose.connect('mongodb://localhost:27017/chat',function(err){
    if(err)
    {
        console.log(err);
    }
    else
    {
        console.log('connected to mongoDB');
    }
});

//Create Schema  :: create database tables

var chatSchema = mongoose.Schema({
    user:String,
    msg:String,
    created:{type:Date,default:Date.now}
});

//Create Model of Mangoose

var Chat = mongoose.model('Message',chatSchema);


app.get('/', function(req, res){
    res.sendFile(__dirname + '/index.html');
});

io.sockets.on('connection', function(socket){
   // console.log('a user connected');
   // socket.on('disconnect', function(){
    //    console.log('user disconnected');
    connections.push(socket);
    console.log("Connected : %s sockets connected",connections.length);

    //Disconnect the socket
    socket.on('disconnect',function(data){
      //  if(!socket.username) return;   //if the user uis disconnected(or close the broeser) and come back then grab it username
        users.splice(users.indexOf(socket.username),1);
        updateUsernames();
        connections.splice(connections.indexOf(socket),1);
        console.log("Disconnected : %s sockets connected",connections.length);  //it says how many are still connected
    });

    //send the message

    socket.on('send message', function(data)
    {
        //Mongoose DB :: Call the above class which we have created
        var newMsg = new Chat({msg: data,user: socket.username});  //here whatever you have defined in schema take that variable and pass into belows username and msg info.

        newMsg.save(function(err){
            if(err) throw err;

            // console.log(data);
            io.sockets.emit('new message', {msg: data, user:socket.username});
        });

    });

    //=====Mongooes retrieve the old messages fron database
    //As Soon as new user is connected Retrieve the old message fron the database and display it

    var query = Chat.find({});
    query.sort('-created').limit(8).exec(function(err,docs){
        if(err) throw err;
        //console.log("sendig old messages");
        socket.emit('load old msgs',docs);
    });
    //=======mongooes retrieve old message

    //New user

    socket.on('new user', function(data, callback){
        callback(true);
        socket.username = data;
        users.push(socket.username);
        updateUsernames();
    });

    function updateUsernames()
    {
        io.sockets.emit('get users', users);
    }
});

/*
server.listen(8080, function(){
    console.log('listening on *:8080');
});
*/