<?php
/*
 *****************************************
 * functions
 *****************************************
 */
date_default_timezone_set('Asia/jakarta');
//error_reporting(0); //Menghilangkan laporan error
require_once ("../connection.php");  // koneksi ke database
require_once ("fungsi_indotgl.php"); // fungsi tanggal (format indonesia)
class Functions {


    /*
     * ************************************
     * Manajemen tabel tiket
     * ************************************
    */

     public function show_tiket(){
         $query = "SELECT t.*, k.* FROM tiket AS t, kategori AS k WHERE k.id_kategori=t.id_kategori ORDER BY t.nama_tiket";
         $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;

     }

     public function all_tiket(){
        $query = "SELECT * FROM tiket ORDER BY nama_tiket";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
     }

    public function add_tiket($kode_tiket,$kategori,$nama_tiket,$deskripsi,$stok,$harga){
        $query = "INSERT INTO tiket VALUES('$kode_tiket','$kategori','$nama_tiket','$deskripsi','$stok','$harga')";
        mysql_query($query);
    }

    public function edit_tiket($kode_tiket,$kategori,$nama_tiket,$deskripsi,$stok,$harga){
        $query = "UPDATE tiket SET nama_tiket='$nama_tiket', id_kategori='$kategori', deskripsi='$deskripsi', stok='$stok', harga='$harga' WHERE kode_tiket='$kode_tiket'";
        mysql_query($query);
    }

    public function get_tiket($kode_tiket){
        $query = "SELECT * FROM tiket WHERE kode_tiket='$kode_tiket'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function delete_tiket($kode_tiket){
        $query = "DELETE FROM tiket WHERE kode_tiket='$kode_tiket'";
        mysql_query($query);
    }


     /*
     * ************************************
     * Manajemen tabel transaksi
     * ************************************
    */

     public function show_transaksi(){
         $query = "SELECT t.*, k.*, l.*, u.* FROM transaksi AS t, tiket AS k, loket AS l, users AS u WHERE k.kode_tiket=t.kode_tiket AND l.id_loket=t.id_loket AND u.id_user=t.id_user ORDER BY t.tanggal DESC";
         $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;

     }

     public function user_transaksi($user){
         $query = "SELECT t.*, k.*, l.*, u.* FROM transaksi AS t, tiket AS k, loket AS l, users AS u WHERE k.kode_tiket=t.kode_tiket AND l.id_loket=t.id_loket AND u.id_user=t.id_user AND t.id_user='$user' ORDER BY t.tanggal DESC";
         $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;

     }

     public function kurangi_tiket($kode_tiket,$jumlah){
        $query = "UPDATE tiket SET stok='$jumlah' WHERE kode_tiket='$kode_tiket'";
        mysql_query($query);
     }

     public function get_transaksi($no_trans){
         $query = "SELECT * FROM transaksi WHERE no_trans='$no_trans'";
         $data  = mysql_query($query);
         $hasil = mysql_fetch_array($data);

        return $hasil;

     }


     public function add_transaksi($no_trans,$id_user,$kode_tiket,$id_loket,$jumlah,$tanggal,$jam,$total){
        $query = "INSERT INTO transaksi VALUES('$no_trans','$id_user','$kode_tiket','$id_loket','$jumlah','$tanggal','$jam','$total')";
        mysql_query($query);
    }


    /*
     * ************************************
     * Manajemen tabel kategori tiket
     * ************************************
    */

    public function show_kategori(){
        $query = "SELECT * FROM kategori ORDER BY nama_kategori ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil [] = $row;
        }

        return $hasil;
    }

    public function add_kategori($nama_kategori,$deskripsi){
        $query = "INSERT INTO kategori VALUES('','$nama_kategori','$deskripsi')";
        mysql_query($query);
    }

    public function edit_kategori($id_kategori,$nama_kategori,$deskripsi){
        $query = "UPDATE kategori SET nama_kategori='$nama_kategori', deskripsi_kategori='$deskripsi' WHERE id_kategori='$id_kategori'";
        mysql_query($query);
    }

    public function get_kategori($id_kategori){
        $query = "SELECT * FROM kategori WHERE id_kategori='$id_kategori'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function delete_kategori($id_kategori){
        $query = "DELETE FROM kategori WHERE id_kategori='$id_kategori'";
        mysql_query($query);
    }


     /*
     * ************************************
     * Manajemen tabel loket tiket
     * ************************************
    */

    public function show_loket(){
        $query = "SELECT * FROM loket ORDER BY nama_loket ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil [] = $row;
        }

        return $hasil;
    }

    public function add_loket($nama_loket,$posisi){
        $query = "INSERT INTO loket VALUES('','$nama_loket','$posisi')";
        mysql_query($query);
    }

    public function edit_loket($id_loket,$nama_loket,$posisi){
        $query = "UPDATE loket SET nama_loket='$nama_loket', posisi='$posisi' WHERE id_loket='$id_loket'";
        mysql_query($query);
    }

    public function get_loket($id_loket){
        $query = "SELECT * FROM loket WHERE id_loket='$id_loket'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function delete_loket($id_loket){
        $query = "DELETE FROM loket WHERE id_loket='$id_loket'";
        mysql_query($query);
    }


    
    /*
     * ************************************
     * Manajemen tabel user
     * ************************************
    */


    public function show_users(){
        $query   = "SELECT * FROM users ORDER BY nama_lengkap ASC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }

    public function add_user($nama,$username,$password,$email,$telpon,$jabatan){
        $query = "INSERT INTO users (username,password,nama_lengkap,email,telpon,level,title) VALUES('$username','$password','$nama','$email','$telpon','2','$jabatan')";
        mysql_query($query);
    }

    public function delete_user($id_user){
        $query = "DELETE FROM users WHERE id_user = '$id_user'";
        mysql_query($query);
    }
    
    public function edit_user($id_user,$nama,$email,$telpon,$jabatan){
        $query  = "UPDATE users SET nama_lengkap='$nama', email='$email', telpon='$telpon', title='$jabatan' 
        WHERE id_user='$id_user'";
        mysql_query($query);
    }
    
    
     public function edit_foto ($id_user,$foto){
        $query  = "UPDATE users SET foto='$foto' WHERE id_user='$id_user'";
        mysql_query ($query);
    }
    
    
    
    
     /*
     * ************************************
     * session login user
     * ************************************
    */
    
    public function cek_username($username) {
        $query = "SELECT * FROM users WHERE username='$username' AND blokir='N'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);
        
        return $hasil;
        
    }
    
     public function login($username,$password) {
        $query = "SELECT * FROM users WHERE username='$username' && password='$password' AND blokir='N'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
        
    }
    
  public function count_user($username,$password) {
        $query = "SELECT * FROM users WHERE username='$username' && password='$password' AND blokir='N'";
        $data    = mysql_query($query);
        $hasil   = mysql_num_rows($data);

        return $hasil;
        
    }
    

  public function regenerate_session($id_session,$id_user,$datetime){
      $query  = "UPDATE users SET id_session='$id_session', last_login='$datetime'
        WHERE " ."id_user='$id_user'";
        mysql_query ($query);
  }

    
    public function get_user ($id_user){
        $query  = "SELECT * FROM users WHERE id_user='$id_user'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    } 
   

    public function ganti_password ($id_user,$password,$locktype){
        $query  = "UPDATE users SET password='$password', locktype='$locktype'
        WHERE " ."id_user='$id_user'";
        mysql_query ($query);
    }
    
   
    
    /*
     * ************************************
     * log aktifitas
     * ************************************
    */
    
    
    public function log_aktifitas ($id_user,$aktifitas,$tanggal,$waktu){
        $query = "INSERT INTO log_aktifitas VALUES ('','$id_user','$aktifitas','$tanggal','$waktu')";
        mysql_query($query);
        
    }
    
    public function log_today ($id_user,$date){
        $query   = "SELECT * FROM log_aktifitas WHERE id_user='$id_user' AND tanggal='$date' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
    
     public function log_yesterday ($id_user,$yesterday){
        $query   = "SELECT * FROM log_aktifitas WHERE id_user='$id_user' AND tanggal='$yesterday' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
     public function log_week ($id_user){
        $query   = "SELECT * FROM log_aktifitas WHERE YEARWEEK(tanggal)=YEARWEEK (NOW()) AND id_user='$id_user' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
    public function log_month ($id_user){
        $query   = "SELECT * FROM log_aktifitas WHERE DATE_FORMAT(tanggal,'%Y %m')=DATE_FORMAT(NOW(),'%Y %m') AND id_user='$id_user' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
    public function log_year ($id_user){
        $query   = "SELECT * FROM log_aktifitas WHERE YEAR(tanggal) = YEAR(now()) AND id_user='$id_user' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
    
    
} /*
 * ****************************************
 * akhiri fungsi (functions)
 * ****************************************
 */



?>
