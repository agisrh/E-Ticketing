
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-plus-square"></i> &nbsp;Tambah Kategori</h2>
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kategori</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="nama" required class="form-control" placeholder="Nama Kategori">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi Kategori</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
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

$a = $_POST['nama'];
$b = $_POST['deskripsi'];

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
        $query->add_kategori($a,$b);
        $query->log_aktifitas($_SESSION[id_user],'Menambahkan kategori baru',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=kategori';</script>";
    //}
}