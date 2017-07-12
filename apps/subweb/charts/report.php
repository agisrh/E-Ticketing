<?php 
require_once("../system/functions.php");
// membuat fungsi baru
$query = new Functions();
//membuat koneksi
$db = new koneksi();

    //Membuat Query
    $q=mysql_query("select * from tiket");
?>
<!-- File yang diperlukan dalam membuat chart -->
<script src="js/jquery.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
    
<script type="text/javascript">
$(function () {
    $('#view').highcharts({
        title: {
            text: 'Data Penjualan per bulan',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [<?php while($r=mysql_fetch_array($q)){ echo "'".$r["id_kategori"]."',";}?>]
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Jumlah ',
            data: [<?php while($t=mysql_fetch_array($k)){ echo $t["stok"].",";}?>]
        }]
    });
});
</script>

<div id="view" style="min-width: 310px; height: 400px; margin: 0 auto"></div>