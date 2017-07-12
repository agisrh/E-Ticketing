<?php
session_start();

// Cek session untuk akses halaman administrasi
if(empty($_SESSION['id_user']) AND empty($_SESSION['level_user'])) {
   header('location:apps/login.php');
}
else {
   
   header('location:apps/admin.php?module=dashboard');  
}
                                      

