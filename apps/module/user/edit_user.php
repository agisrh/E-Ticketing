<?php
$row = $query->get_user($_GET['id']);
?>
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-plus-square"></i> &nbsp;Edit User</h2>
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
                                                <input type="text" name="a" value="<?php echo "$row[nama_lengkap]"; ?>" required class="form-control" placeholder="Nama Lengkap">
                                                <input type="hidden" value="<?php echo "$row[id_user]"; ?>" name="id">
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" required value="<?php echo "$row[username]"; ?>" disabled="disabled" class="form-control" >
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Loket</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="loket" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Loket</option>
                                                     <?php
                                                     // Menampilkan pilihan loket
                                                     $loket = $query->show_loket();
                                                     foreach($loket as $data) {
                                                     echo "<option value='".$data['id_loket']."'";
                                                     echo  $data['id_loket']==$row['id_loket'] ? 'selected' : '';
                                                     echo ">$data[nama_loket]";
                                                     echo "</option>";
                                                     }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="email" name="b"  value="<?php echo "$row[email]"; ?>" required class="form-control" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Telpon</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="c"  value="<?php echo "$row[telpon]"; ?>" required class="form-control" placeholder="Telpon">
                                            </div>
                                        </div>
                                     

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="d"  value="<?php echo "$row[title]"; ?>" required class="form-control" placeholder="Jabatan">
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
// Proses Edit Data
$id= $_POST['id'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['loket'];


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
        $query->edit_user($id,$a,$b,$c,$d,$e);
        $query->log_aktifitas($_SESSION[id_user],'Mengubah data user',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=user';</script>";
    //}
}