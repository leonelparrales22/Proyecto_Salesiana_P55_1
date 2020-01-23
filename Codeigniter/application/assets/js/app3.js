function fetchdata(){
    $.ajax({
     url: 'llamadaBase',
     type: 'post',
     success: function(response){
      alert(response);
      console.log("LEONEL");
     }
    });
   }
   
$(document).ready(function(){
    setInterval(fetchdata,1000);
});