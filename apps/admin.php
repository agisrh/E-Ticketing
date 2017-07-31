<?php
date_default_timezone_set('Asia/jakarta');
require_once("../system/functions.php"); // masukan file functions.php
require_once("../system/fungsi_indotgl.php"); // masukan file fungsi_indotgl.php
$query = new Functions();
$db = new koneksi();

ob_start();
session_start();
if(empty($_SESSION['id_user']) AND empty($_SESSION['level_user'])) {
    require 'login.php';
}
else {
    $profil = $query->get_user($_SESSION[id_user]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require_once 'subweb/header.php';
   ?>
</head>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="?module=dashboard" class="site_title"><i class="fa fa-ticket"></i> <span>E-Ticket</span></a>
                    </div>
                    <div class="clearfix"></div>


                    <!-- Info Profile -->
    <div class="profile">
        <div class="media user-media">
          <div class="user-media-toggleHover">
          </div>
          <div class="user-wrapper">
                <?php
                if($profil[foto]==''){
              echo" <a class='user-link pull-left' href='?module=lengkapi_profil&id=$_SESSION[id_user]'>
                  <img class='media-object img-thumbnail user-img' width='65px' height='65px' alt='User Picture' src='../assets/images/user.png'>
              <span class='label label-danger user-label'>16</span>"; 
                }else{
                echo"<a class='user-link pull-left' href='?module=user_profil&id=$_SESSION[id_user]'>
                    <img class='media-object img-thumbnail user-img' width='65px' height='65px' alt='User Picture' src='../images/foto_users/$profil[foto]'>
              <span class='label label-danger user-label'>16</span>";     
                }
                      ?>
            </a> 
            <div class="media-body">
             <div class="profile_info">
                  <i class="fa fa-circle" style="color: greenyellow;"></i>
                      <span>Online</span>
                      <h2><?php echo "$_SESSION[nama_user]"; ?></h2>
             </div>
            </div>
          </div>
        </div>                     
    </div>

    <?php if($_SESSION['level_user']=='1'){ ?>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="?module=dashboard"><i class="fa fa-home"></i> Home</a></li> 
                            </ul>
                            <ul class="nav side-menu">
                            <li><a><i class="fa fa-credit-card"></i> Master <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="?module=tiket">Tiket</a></li>
                              <li><a href="?module=kategori">Kategori Tiket</a></li>
                              <li><a href="?module=loket">Loket</a></li>
                            </ul>
                          </li>    
                            </ul>

                            <ul class="nav side-menu">
                                <li><a href="?module=transaksi"><i class="fa fa-money"></i> Transaksi</a></li>
                                
                                
                            </ul>
                            <ul class="nav side-menu">
                                <li><a href="?module=laporan"><i class="fa fa-bar-chart"></i> Laporan</a></li>
                                
                                
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Setting</h3>
                            <ul class="nav side-menu">
                                
                                <li><a href="?module=user"><i class="fa fa-user"></i> User</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <?php 
                }else{
                    ?>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                           <ul class="nav side-menu">
                                <li><a href="?module=transaksi"><i class="fa fa-money"></i> Transaksi</a></li>
                                   
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->
                    
                    <?php
                }
                    ?>
                    
                    
                    
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a href="" data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            
            
            
            
            
            
            <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

        
                        
                        
                        
                        
                        <!---menu navbar right---->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                                    <img src='../assets/images/theme.png' alt='' width="30px" height="30px"> &nbsp;
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    
                                    <li>
                                             <a href='?module=user_profil&id=<?php echo $_SESSION[id_user]; ?>'><i class="fa fa-user pull-right"></i>
                                            <span>Profil Saya</span></a>
                                    </li>
                                    <li><a href="javascript:;" onclick="form_ganti_password();"><i class="fa fa-unlock-alt pull-right"></i> Ganti Password</a>
                                    </li>
                                    
                                    <li><a href="?module=log_aktifitas"><i class="fa fa-history pull-right"></i> Log Aktifitas</a>
                                    </li>
                                    
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            
            
            
            <!-- page content -->
            <div class="right_col" role="main">  
                <div class="row">
                  
                <?php require ('media.php'); ?>     
                    
                </div>
            </div>
        </div>
    </div>


  
        
    
</body>
</html>


<?php
require_once 'subweb/footer.php';
}