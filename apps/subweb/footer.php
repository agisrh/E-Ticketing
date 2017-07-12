
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../assets/js/icheck.min.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- charts -->
    <script src="../assets/js/charts/highcharts.js"></script>
    <script src="../assets/js/charts/exporting.js"></script>

    <!-- PNotify -->
    <script type="text/javascript" src="../assets/js/pnotify.core.js"></script>
    <!-- Skycons -->
    <script src="../assets/js/skycons.js"></script>
    <!-- select2 -->
    <script src="../assets/js/select2.full.js"></script>
    <!-- jclock -->
    <script src="../assets/js/jqClock.min.js"></script>
    <!-- ckeditor -->
    <script src="../assets/ckeditor/ckeditor.js"></script>
    <!-- datepicker -->
    <script src="../assets/js/bootstrap-colorpicker.js"></script>

    <!-- daterange picker -->
    <script src="../assets/js/moment.min2.js"></script>
    <script src="../assets/js/daterangepicker.js"></script>
    <!-- dataTables -->
   <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
    
    <script src="../assets/js/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    
</body>

</html>
    
<?php
    echo"<script>

        var icons = new Skycons({
                'color': '#73879C'
            }),
            list = [
                'clear-day', 'clear-night', 'partly-cloudy-day',
                'partly-cloudy-night', 'cloudy', 'rain', 'sleet', 'snow', 'wind',
                'fog'
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>


 <!-- select2 -->
        <script>
            $(document).ready(function () {
                $('.select2_single').select2({
                    placeholder: 'Pilih Kategori',
                    allowClear: true
                });
            });
        </script>
 <!-- jclock -->       
  <script>
    $(document).ready(function(){    
      $('#jam').clock({'format':'24','calendar':'false'});
    });    
  </script>";
  
 echo" 
     <!-- /datepicker -->
    <script type='text/javascript'>
        $(document).ready(function () {
            $('#single_cal1').daterangepicker({
                singleDatePicker: true,
                format: 'YYYY/MM/DD',
                calender_style: 'picker_1'
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>";     
 
 echo " <script>
            $(document).ready(function () {
                $('.dataTables-example').dataTable();
            });
    </script>";
 echo "<script>
 function form_ganti_password() { open('ganti_password.php','form','menubar=no,width=400,height=600'); }
 </script>";
 