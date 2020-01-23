$(document).ready(function() {
    $("input.active").click(function() {
        var check_active = $(this).is(':checked') ? 1 : 0;
        if(parseInt(check_active)==1){
            $.ajax({
                url: 'VentiladorOn',
                type: 'POST'
            })
        } else {
            $.ajax({
                url: 'VentiladorOff',
                type: 'POST'
            })
        }
    });
});
