var Express = require('express'), 
    app = Express(),
    Server = require('http').Server(app),
    IO = require('socket.io')(Server),
    MongoClient = require('mongodb').MongoClient,
    url = 'mongodb://localhost:27017',
    dbName = 'chat'

    
        const webpush = require('web-push');
    const e = require('express');
    const { error } = require('console');
    
    const Keys = {
        PublicKey: "BJP_NmGVE55UO_GDX2x0fCWMFw6OWdXAQe8B-k2UZRampXDur1fEgOmMxJtv-yquBxI9WPzngAB5gIGJ3D_FOKU",
        PrivateKey: "8ecCYxIg3Rou4ViIB1gASmtL7wE01dWNOEG79uWdQV4"
    }
    
    webpush.setVapidDetails(
        "mailto:alfredog201817@gmail.com"
        Keys.PublicKey,
        Keys.PrivateKey
    );
    
    let pushSubscripton;
   

IO.on('connection', function (socket) {
    socket.on('Suscribirse', function(data){
        console.log("suscribiendo");
        
        pushSubscripton = data;
        console.log(data);
    })

    
    MongoClient.connect(url, {useNewUrlParser: true, useUnifiedTopology: true},function (err, client) {
        const db = client.db(dbName);

        db.collection(`ChatCollect`).find({}).toArray(function (err,msg) {
            socket.emit('messages', msg);
        });

    });


    socket.on('add-message', function (data) {
        let message = data.text, usuario = data.nickname;
    
        MongoClient.connect(url, function (err, client) {
            const db = client.db(dbName);
            
            
            db.collection(`ChatCollect`).insert(data);

            db.collection(`ChatCollect`).find({}).toArray(function (err,msg) {
                IO.sockets.emit('messages', msg);

                const payload = JSON.stringify({
                    title: usuario,
                    message
                    });
                    
                    console.log(JSON.stringify(pushSubscripton));
                    
                    webpush.sendNotification(pushSubscripton, payload).catch(e => console.error(e));
               

            });

    
        });
    

    });
    
    
});

Server.listen(6678, function () {
    console.log("Servidor esta funcionando en http://localhost:6678");
    
});