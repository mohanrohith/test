var http = require('http');

http.createServer(function(req, res){
  res.writeHead(200,{
    "Content-type:":"text/plain"
  });
 console.log(req["socket"]["remoteAddress"]); 
  
  res.end("check your console to debug ");
})
.listen(3344,"192.168.0.120");
console.log("Server Started running at 3344");