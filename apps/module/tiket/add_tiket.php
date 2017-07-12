
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-plus-square"></i> &nbsp;Tambah Tiket</h2>
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

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Tiket</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="kode" required class="form-control" placeholder="Kode Tiket">
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Tiket</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="nama" required class="form-control" placeholder="Nama Tiket">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Tiket</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="kategori" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Kategori Tiket</option>
                                                    <?php
                                                    $data = $query->show_kategori();
                                                    foreach($data as $row){
                                                    echo"<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Stok</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="stok" required class="form-control" placeholder="Stock">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="harga" required class="form-control" placeholder="Harga">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                               <textarea type="text" name="deskripsi" required class="form-control"></textarea>
                                            </div>
                                        </div>

                                       
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

$kode      = $_POST['kode'];
$nama      = $_POST['nama'];
$kategori  = $_POST['kategori'];
$stok      = $_POST['stok'];
$harga     = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

if(isset($_POST['save'])){
    // if(empty($a) or empty($b) or empty($c) or empty($d) or empty($e) or empty($f)){
    //      echo "<script type='text/javascript'>
    //     var permanotice, tooltip, _alert;
    //     $(function () {
    //         new PNotify({
    //             title: 'INFORMASI',
    //             type: 'info',
    //             text: 'Tidak boleh ada yang kosong !',
    //             nonblock: {
    //                 nonblock: true
    //             },
    //         });

    //     });
    // </script>";
    // }else{
        $query->add_tiket($kode,$kategori,$nama,$deskripsi,$stok,$harga);
        $query->log_aktifitas($_SESSION[id_user],'Mengubah data tiket',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=tiket';</script>";
    //}
}