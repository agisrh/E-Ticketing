<?php 
require_once("../system/functions.php");
// membuat fungsi baru
$query = new Functions();
//membuat koneksi
$db = new koneksi();

	//Membuat Query
	$q=mysql_query("select * from tiket");
?>


<script type="text/javascript">
$(function () {

    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#view').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Stok Tiket'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
			<?php
		while($r=mysql_fetch_array($q)){
		 	echo "['".$r["id_kategori"]."',".$r["stok"]."],";
		}
		?>
			]
        }]
    });
});
</script>
	
<div id="view" style="min-width: 310px; height: 400px; margin: 0 auto"></div>