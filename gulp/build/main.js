require("http");var url=require("url"),getdata;http.createServer(function(e,t){e.on("end",function(){_get=url.parse(e.url,!0).query,t.writeHead(200,{"Content-type":"text/plain"}),getdata=_get.data}),t.end("Here is the data you entered :"+getdata)}).listen(8082),console.log("Server running at http://127.0.0.1:8082");