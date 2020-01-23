$(document).ready(function() {
    window.alert("hola");
    $("input.active").click(function() {
        var check_active = $(this).is(':checked') ? 1 : 0;
        if(parseInt(check_active)==1){
            $.ajax({
                url: 'FocoOn',
                type: 'POST'
            })
        } else {
            $.ajax({
                url: 'FocoOff',
                type: 'POST'
            })
        }
    });

  });
