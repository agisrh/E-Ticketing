
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-plus-square"></i> &nbsp;Tambah Transaksi</h2>
                 <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
            <div class="clearfix"></div>
        </div>
        
                        <div class="x_content">
                         <br />
                         <form method="POST" action="" class="form-horizontal form-label-left col-md-8">

                                         <?php
                                         $y=date("Y");
                                         $m=date("m");
                                         $d=date("d");
                                         $h=date("H");
                                         $i=date("i");
                                         $s=date("s");
                                         $no_trans=$y.$m.$d.$h.$i.$s;
                                          ?>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Transaksi</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="hidden" name="no" value="<?php echo "$no_trans"; ?>">
                                                <input type="text" required value="<?php echo "$no_trans"; ?>" disabled="disabled" class="form-control" placeholder="Kode Tiket">
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiket</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="tiket" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Tiket</option>
                                                    <?php
                                                    $tiket = $query->all_tiket();
                                                    foreach($tiket as $t){
                                                    echo"<option value='$t[kode_tiket]'>$t[nama_tiket]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Loket</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="loket" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Loket Tiket</option>
                                                    <?php
                                                    $loket = $query->show_loket();
                                                    foreach($loket as $l){
                                                    echo"<option value='$l[id_loket]'>$l[nama_loket]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="jumlah" required class="form-control" placeholder="Jumlah">
                                            </div>
                                        </div>

                                         <!-- <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" required class="form-control" placeholder="Harga">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Total</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="total" required class="form-control" placeholder="Total">
                                            </div>
                                        </div> -->

                                       
                                        <br><br><br><div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button name="save" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                                                <button name="cancel" class="btn btn-sm btn-danger"><i class="fa fa-mail-reply"></i>  &nbsp; Batal</button>
                                            </div>
                                        </div>

                                    </form>
                         
                         
                    <div class="col-md-4 pull-right">  
                      <div class="pricing ui-ribbon-container">
                                        <div class="ui-ribbon-wrapper">
                                            <div class="ui-ribbon">
                                                INFO
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3>DATE TIME </h3> 
                                        </div>
                                        <div class="x_content">
                        
                        <div class="pricing_features">
                            <div class="col-sm-13"> 
                                 <div class="weather-icon pull-left">
                                  <span>
                                    <canvas height="84" width="84" id="partly-cloudy-day"></canvas><br>
                                   <canvas height="32" width="32" id="snow"></canvas>
                                   <canvas height="32" width="32" id="sleet"></canvas>
                                  </span>
                                 </div><br>
                                 <div class="weather-text pull-right">
                                     <h4><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php echo tgl_indo(date("Y-m-d")); ?></h4>
                                  <h3><i class="fa fa-clock-o"></i>&nbsp;<span id="jam"></span> <small>WIB</small></h3>
                              </div>
                              </div>
                        </div>
          </div>
          </div>
          </div> 
                         
                        
  </div>
  </div>
  </div>



 

<?php   
// Proses Input Data

$no      = $_POST['no'];
$user    = $_SESSION['id_user'];
$tiket   = $_POST['tiket'];
$loket   = $_POST['loket'];
$jumlah  = $_POST['jumlah'];
$tanggal = date("Y-m-d");
$jam     = date("H:i:s");
//$total   = $_POST['total'];

if(isset($_POST['save'])){
  $cek = $query->get_tiket($tiket);
  $stok= $cek['stok'];
  $count = $stok-$jumlah;
  $total = $jumlah*$cek['harga'];
  if($count<=0){
         echo "<script type='text/javascript'>
        var permanotice, tooltip, _alert;
        $(function () {
            new PNotify({
                title: 'INFORMASI',
                type: 'error',
                text: 'Stok tiket tidak cukup !',
                nonblock: {
                    nonblock: true
                },
            });

        });
    </script>";
     }else{
        $query->add_transaksi($no,$user,$tiket,$loket,$jumlah,$tanggal,$jam,$total);
        $query->kurangi_tiket($tiket,$count);
        $query->log_aktifitas($_SESSION[id_user],'Melakuan transaksi',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=transaksi';</script>";
    }
}