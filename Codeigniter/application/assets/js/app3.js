function fetchdata(){
    $.ajax({
     url: 'llamadaBase',
     type: 'post',
     success: function(response){
        //alert(response);
        //console.log("LEONEL");
        document.getElementById('miTabla').innerHTML = "<h1>Hola<";
     }
    });
   }
   
$(document).ready(function(){
    setInterval(fetchdata,1000);
});