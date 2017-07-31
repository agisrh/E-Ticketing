<?php
$host="localhost:3307";
$user="root";
$pass="123456";
$db="app_ticketing";

//koneksi 
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

   include "../../../assets/fpdf/fpdf.php";
   require_once("../../../system/fungsi_indotgl.php");

    function rupiah($angka)
    {
        return 'Rp '. number_format($angka,2,',','.');
    }

    $from = $_POST['from'];
    $until= $_POST['until'];
    $user = $_POST['user'];
    $dari = tgl_indo($from);
    $sampai= tgl_indo($until);
    $datenow = date("Y-m-d");
    $sekarang = tgl_indo($datenow);

    $pdf = new FPDF();
    $pdf->Open();
    $pdf->addPage();
    $pdf->setAutoPageBreak(true);
    $pdf->setFont('Arial','',12);
    $pdf->text(10,25,'LAPORAN DATA PENJULANA TIKET');
     $pdf->setFont('Arial','',8);
    $pdf->text(10,30,$dari.' sampai '.$sampai);
    //$pdf->text(10,37,'UNIVERSITAS SILIWANGI');
    $pdf->Line(10,33,195,33);
    $yi = 50;
    $ya = 44;
    $pdf->setFont('Arial','',9);
    $pdf->setFillColor(222,222,222);
    $pdf->setXY(10,$ya);
    $pdf->CELL(10,6,'No.',1,0,'C',1);
    $pdf->CELL(40,6,'Loket',1,0,'C',1);
    $pdf->CELL(65,6,'Nama Petugas',1,0,'C',1);
    $pdf->CELL(30,6,'Tiket Terjual',1,0,'C',1);
	$pdf->CELL(35,6,'Pendapatan',1,0,'C',1);
    $ya = $yi + $row;
    $sql = mysql_query("select * from loket order by nama_loket ASC");
    $i = 1;
    $no = 1;
    $max = 31;
    $row = 6;

    
    while($data = mysql_fetch_array($sql)){
    // Data Petugas
    $staff_query = mysql_query("select * from users where id_loket='$data[id_loket]'");
    // Hitung Tiket Terjual
    $hitung_tiket = mysql_query("select sum(jumlah) as total_tiket from transaksi where tanggal between '$from' and '$until' and id_loket='$data[id_loket]'");
    $hasil_hitung = mysql_fetch_array($hitung_tiket);
    $total_tiket = $hasil_hitung['total_tiket'];
    // Hitung Total Pendapatan
    $hitung_pendapatan = mysql_query("select sum(total) as pendapatan from transaksi where tanggal between '$from' and '$until' and id_loket='$data[id_loket]'");
    $total_pendapatan = mysql_fetch_array($hitung_pendapatan);
    $total_uang  = rupiah($total_pendapatan['pendapatan']);

    $staff = mysql_fetch_array($staff_query);
    $pdf->setXY(10,$ya);
    $pdf->setFont('arial','',9);
    $pdf->setFillColor(255,255,255);
    $pdf->cell(10,6,$no,1,0,'C',1);
    $pdf->cell(40,6,$data[1],1,0,'L',1);
    $pdf->cell(65,6,$staff[nama_lengkap],1,0,'L',1);
    $pdf->CELL(30,6,$total_tiket." Lembar",1,0,'L',1);
	$pdf->CELL(35,6,$total_uang,1,0,'L',1);
    $ya = $ya+$row;
    $no++;
    $i++;

    $final_tiket +=$total_tiket;
    $sum_pendapatan +=$total_pendapatan['pendapatan'];
    $final_pendpatan = rupiah($sum_pendapatan);
    }

    $pdf->setXY(10,$ya);
    $pdf->setFont('arial','',9);
    $pdf->setFillColor(222,222,222);
    $pdf->cell(115,6,"Total : ",1,0,'R',1);
    $pdf->cell(30,6,$final_tiket." Lembar",1,0,'L',1);
    $pdf->cell(35,6,$final_pendpatan,1,0,'L',1);
    $pdf->text(145,$ya+13,"Jakarta , ". $sekarang);
    $pdf->text(145,$ya+30,$user);
    $pdf->output();
    ?>