<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Content</title>
</head>

<body>
<?php
if ($_GET['module']=='dashboard')
{ 
include "dashboard.php";
}


else
if ($_GET['module']=='user')
{ 
include "module/user/list_user.php";
}
else
if ($_GET['module']=='add_user')
{ 
include "module/user/add_user.php";
}
else
if ($_GET['module']=='edit_user')
{ 
include "module/user/edit_user.php";
}
else
if ($_GET['module']=='view_user')
{ 
include "module/user/view_user.php";
}
if ($_GET['module']=='user_profil')
{ 
include "module/user/user_profil.php";
}


else
if($_GET['module']=='kategori')
{
include "module/kategori/list_kategori.php";
}
else
if($_GET['module']=='add_kategori')
{
include "module/kategori/add_kategori.php";
}
else
if($_GET['module']=='edit_kategori')
{
include "module/kategori/edit_kategori.php";
}

else
if($_GET['module']=='transaksi')
{
include "module/transaksi/list_transaksi.php";
}
else
if($_GET['module']=='add_transaksi')
{
include "module/transaksi/add_transaksi.php";
}
else
if($_GET['module']=='print_transaksi')
{
include "module/transaksi/print_transaksi.php";
}


else
if($_GET['module']=='loket')
{
include "module/loket/list_loket.php";
}
else
if($_GET['module']=='add_loket')
{
include "module/loket/add_loket.php";
}
else
if($_GET['module']=='edit_loket')
{
include "module/loket/edit_loket.php";
}


else
if($_GET['module']=='tiket')
{
include "module/tiket/list_tiket.php";
}
else
if($_GET['module']=='add_tiket')
{
include "module/tiket/add_tiket.php";
}
else
if($_GET['module']=='edit_tiket')
{
include "module/tiket/edit_tiket.php";
}

else    
if ($_GET['module']=='log_aktifitas')
{ 
include "module/log_aktifitas/log.php";
}

else    
if ($_GET['module']=='laporan')
{ 
include "module/laporan/laporan.php";
}
else    
if ($_GET['module']=='print')
{ 
include "module/laporan/print.php";
}



else
{
include "not_found.php";	
}
?>
</body>
</html>