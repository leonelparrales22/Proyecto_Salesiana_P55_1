function fetchdata(){
    $.ajax({
     url: 'TablaTemperaturaDinamica',
     type: 'post',
     success: function(response){
        //alert(response);
        //console.log("LEONEL");
        document.getElementById('miTabla').innerHTML = response;
     }
    });
   }
   
$(document).ready(function(){
    setInterval(fetchdata,1000);
});