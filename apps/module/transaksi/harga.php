
<?php
$host="localhost:3307";
$user="root";
$pass="123456";
$db="app_ticketing";
$tiket = $_POST['guru'];
//koneksi 
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
// Menampilkan pilihan standar kompetensi
$data = mysql_query("select * from tiket where id_tiket='$guru'");
$hasil = mysql_fetch_array($data);
echo "$hasil[harga]";
                                      
?>
