<?php
$id = $_GET['id'];
$data = $query->get_user($id);
   ?>

<div class="clearfix"></div>
    <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                      <div class="x_title">
                            <h2>User Profile</h2>
                                   <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

          <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php if($data[foto]!='') {
                                        echo "../images/foto_users/$data[foto]";}
                                        else{ echo "../assets/images/user.png"; }?>" alt="image" />
                                            <div class="mask">
                                                        <p><?php echo "$_SESSION[nama_user]"; ?></p>
                                                        <?php
                                                        if($data['id_user']==$_SESSION['id_user']){
                                                        echo "<div class='tools tools-bottom'>
                                                            <a href='#'><i class='fa fa-search-plus'></i></a>
                                                            <a data-toggle='modal' data-target='.bs-example-modal-sm'><i class='fa fa-pencil'></i></a>
                                                            <a href='#'><i class='fa fa-times'></i></a>
                                                        </div>";
                                                    }
                                                    ?>
                                                    </div>
                                                </div>                 
                                            </div>
                        
                        
    <h3><?php echo "$_SESSION[nama_user]"; ?></h3>
        <ul class="list-unstyled user_data">
            <li>
            <i class="fa fa-briefcase user-profile-icon"></i> <?php echo "$data[title]"; ?>
            </li>
            <li class="m-top-xs">
            <i class="fa fa-envelope-o user-profile-icon"></i> <?php echo "$data[email]"; ?>
            </li>
            <li>
            <i class="fa fa-phone-square user-profile-icon"></i> <?php echo "$data[telpon]"; ?>
            </li>
        </ul>
        <?php
        if($data['id_user']==$_SESSION['id_user']){
        echo "<a href='?module=edit_user&id=<?php echo$data[id_user]; ?>' title='Lihat'  class='btn btn-success'>
        Edit Profil <i class='fa fa-edit'></i></a>";
    }
        ?>
</div>
</div>
                                    
 
                                    
                                    
                                    
                          <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="bs-example" data-example-id="simple-jumbotron">
                                    <div class="jumbotron">
                                        <h1>Hello, world!</h1>
                                        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    </div>
                                </div>
                           </div>
                
                                                    
   

                                      

                    
 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
     <form accesskey="" method="POST" enctype="multipart/form-data" >
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Edit Foto Profil</h4>
                </div>
        <div class="modal-body">
                        
                        <div class="fileinput fileinput-new" style="margin-left:60px; margin-bottom:30px;" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
                            <img src="<?php if($data[foto]!='') {
                                        echo "../images/foto_users/$data[foto]";}
                                        else{ echo "../assets/images/user.png"; }?>" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                            <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Pilih gambar</span> <span class="fileinput-exists">Ganti</span> 
                            <input type="file" name="gambar">
                            </span> 
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a> 
                            </div>
                        </div>
                                                
     <div class="modal-footer">
            <button name="cancel" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-mail-reply"></i>  &nbsp; Batal</button>
            <button name="save" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
    </div>
    </div>
    </div>
    </div>
     </form>
 </div>

 <?php
 // Menyimpan nama dan mengupload foto
    $id_user    = $_SESSION[id_user];
    $file       = $_FILES['gambar']['tmp_name'];
    $filename   = $_FILES['gambar']['name'];
    $dir        = "../images/foto_users/";
    $ok         = $dir.$filename;
    
    if(isset($_POST['save'])){
        if($data[foto]!=''){
            unlink("../images/foto_users/$data[foto]");
        }
        
        // Query upload foto
        if(move_uploaded_file($file, $ok)) {
          $query->edit_foto($id_user,$filename);
          $query->log_aktifitas($id_user,'Mengubah foto Profil',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=user_profil';</script>";   
        }
    }