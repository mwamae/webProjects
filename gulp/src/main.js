require("http");
var url= require('url');
var getdata;
http.createServer(function(request, response){
    request.on('end', function(){
        _get= url.parse(request.url, true).query;
        response.writeHead(200, {'Content-type':'text/plain'}); 
     getdata = _get['data'];   
        
    });
        
    response.end('Here is the data you entered :' +getdata);
    
}).listen(8082);
console.log('Server running at http://127.0.0.1:8082');

