
<html>
  <head>
    <style>
		div{
				position: absolute;
				top: 20%;
				left: 40%;	
			}
    </style>

    <script>
function WebSocketTest(){
 if (window.WebSocket){
    alert("WebSocket is supported by your Browser!");
	
      //var host = location.origin.replace(/^http/, 'ws');
	  // var ws = new WebSocket(host);
      
	  var ws = new WebSocket('ws://echo.websocket.org/');

		ws.onopen = function() {
			
				var msg="How are you? ";
                ws.send(msg);
				alert("Mom Says: " + msg);
		};
	 

	 /*
	{	
	   console.log("here1");
	   var msg="Hello Socket!";
                ws.send(msg);
				console.log("here2");
        alert("Message is sent : " + msg);
     };*/ 

     ws.onmessage = function (evt) 
               { 
                  var received_msg = evt.data;
                  alert("Mom, I am fine. " + evt.data);
               };


     ws.onclose = function()
     { 

        alert("Connection is closed..."); 
     };

     ws.onerror = function()
     { 
                alert("WebSocket error..."); 
     };

}
else {
        alert("WebSocket NOT supported by your Browser!");
      }
}
    </script>
  </head>
  <body>
	<div>
	<h1>Web Socket<br> with HTML5 and node.js</h1>
	<p> Copyright &copy Summer 2016:<i> Jaydipkumar Bhakta</i><p>
    <a href="javascript:WebSocketTest()">Run WebSocket</a>
    <ul id='pings'></ul>
	</div>
  </body>
</html>
