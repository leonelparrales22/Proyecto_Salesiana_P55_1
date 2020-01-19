<script src="<?php echo base_url();?>code/highcharts.js"></script>
<script src="<?php echo base_url();?>code/modules/exporting.js"></script>
<script src="<?php echo base_url();?>code/modules/export-data.js"></script>
<script src="<?php echo base_url();?>code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Gráfico de presión que muestra la actualización de datos cada segundo, con la eliminación de datos antiguos.
    </p>
</figure>



<script type="text/javascript">
var myTimervar;
var contador=1;

Highcharts.chart('container', {
    chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];

                if(myTimervar){
                    window.clearInterval(myTimervar);
                }
                myTimervar = setInterval( async function () {

                    var x = (new Date()).getTime(), // current time
                        y = parseInt(await fetch('<?php echo base_url();?>BDDPresion1.php')
                                .then( respuesta => respuesta.text() ));
                    console.log('y=',y);
                    series.addPoint([x, y], true, true);

                }, 1000);
            }
        }
    },

    time: {
        useUTC: false
    },

    title: {
        text: 'Presión'
    },

    accessibility: {
        announceNewData: {
            enabled: true,
            minAnnounceInterval: 15000,
            announcementFormatter: function (allSeries, newSeries, newPoint) {
                if (newPoint) {
                    return 'New point added. Value: ' + newPoint.y;
                }
                return false;
            }
        }
    },

    xAxis: {
        title: {
            text: 'Tiempo'
        },
        type: 'datetime',
        tickPixelInterval: 150
    },

    yAxis: {
        title: {
            text: 'Temperatura'
        },
        plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
        }]
    },

    tooltip: {
        headerFormat: '<b>{series.name}</b><br/>',
        pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
    },

    legend: {
        enabled: false
    },

    exporting: {
        enabled: false
    },

    series: [{
        name: 'Random data',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;

            var temp = [
                <?php
                    foreach ($datos->result_array() as $reg) {
                         echo $reg['presion'].",";
                    }
                  ?>
            ];


            for (i = -19; i <= 0; i += 1) {
                data.push({
                    x: time + i * 1000,
                    y: temp[i*(-1)]
                });
            }
            return data;
        }())
    }]
});
		</script>



<br>
