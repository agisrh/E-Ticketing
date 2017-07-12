<?php
	function waktu_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
                        $jam        = substr($tgl,11,19);
			return $tanggal.' '.$bulan.' '.$tahun.' Pukul : '.$jam.' '.WIB;		 
	}
        
        function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}
        
        function dateLine($datenow, $dateline) {
                        $date_line        = explode("-", $dateline);
                        $DateLine         = $date_line[2]."-".$date_line[1]."-".$date_line[0];
                        $date_now         = explode("-", $datenow);
                        $DateNow          = $date_now[2]."-".$date_now[1]."-".$date_now[0];
                        $Hitung_selisih   = strtotime($DateLine) - strtotime($DateNow);
                        $Tampil_selisih   = $Hitung_selisih / 86400;

                        return $Tampil_selisih;
        }
        
        
	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			} 
?>
