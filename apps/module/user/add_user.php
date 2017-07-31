
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-plus-square"></i> &nbsp;Tambah User</h2>
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="nama" required class="form-control" placeholder="Nama Lengkap">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="username" required class="form-control" placeholder="Username">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="password" required class="form-control" placeholder="Password">
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="email" name="email" required class="form-control" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Telpon</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="telpon" required class="form-control" placeholder="Telpon">
                                            </div>
                                        </div>
                                     

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="jabatan" required class="form-control" placeholder="Jabatan">
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
$b = $_POST['username'];
$c = md5($_POST['password']);
$d = $_POST['email'];
$e = $_POST['telpon'];
$f = $_POST['jabatan'];
$g = $_POST['loket'];

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
        $query->add_user($a,$b,$c,$d,$e,$f,$g);
        $query->log_aktifitas($_SESSION[id_user],'Menambahkan user baru',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=user';</script>";
    //}
}