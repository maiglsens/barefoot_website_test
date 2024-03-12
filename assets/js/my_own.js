function block() {
    document.getElementById("map").src = "https://www.google.com/maps/d/embed?mid=1kZ5oOpi9301C1odVvrTIcOTw7FUUhlk&ehbc=2E312F&noprof=1";
    document.getElementById("map_img").style.display = "none";
    document.getElementById("map").style.display = "block";
}



/* Diable mail submit button if email is empty */

function success() {
    if(document.getElementById("email").value==="") { 
           document.getElementById('submit_button').disabled = true; 
       } else { 
           document.getElementById('submit_button').disabled = false;
       }
   }