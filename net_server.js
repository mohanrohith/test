var net = require('net'),c =0;

net.createServer(function(socket){
  socket.write("Connections "+ c++);
  socket.end();
}).listen(8998);