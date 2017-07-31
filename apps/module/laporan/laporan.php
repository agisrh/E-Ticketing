<form action="module/laporan/print.php" method="POST">
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Laporan<small> Hari ini</small></h3>
                  </div>
                   <div class="form-group">
                      <div class="col-md-2 col-sm-9 col-xs-12">
                      <input type="hidden" name="user" value="<?php echo "$_SESSION[nama_user]"; ?>">
                          <input type="text" name="from" required class="form-control single_cal1" placeholder="Dari : <?php echo date("d/m/Y"); ?>">
                          </div>
                          <div class="col-md-2 col-sm-9 col-xs-12">
                          <input type="text" name="until" required class="form-control single_cal1" placeholder="Sampai : <?php echo date("d/m/Y"); ?>">
                          </div>
                        <button type="submit" name="view" type="submit" class="btn btn-success"><i class="fa fa-search"></i> Lihat Laporan</button>       
                        </div>
                </div>
                </form>

                <div class="col-md-12 col-sm-12 col-xs-12">
                <?php
                function rupiah($angka)
                {
                    return 'Rp '. number_format($angka,2,',','.');
                }
                $tanggal = date("Y-m-d");
                $loket = $query->show_loket();
                foreach ($loket as $data) {
                  // Mencari informasi petugas
                $datapetugas = mysql_query("select * from users where id_loket='$data[id_loket]'");
                $petugas = mysql_fetch_array($datapetugas);

                  // Hitung transaksi hari ini
                $hitung_tiket = mysql_query("select sum(jumlah) as total_tiket from transaksi where tanggal='$tanggal' and id_loket='$data[id_loket]'");
                $hasil_hitung = mysql_fetch_array($hitung_tiket);
                $total_tiket = $hasil_hitung['total_tiket'];
                $hitung_pendapatan = mysql_query("select sum(total) as pendapatan from transaksi where tanggal='$tanggal' and id_loket='$data[id_loket]'");
                $total_pendapatan = mysql_fetch_array($hitung_pendapatan);
                $total_uang  = rupiah($total_pendapatan['pendapatan']);
                  
                  echo "<div class='col-md-4 col-sm-4 col-xs-12 profile_details'>
                        <div class='well profile_view'>
                          <div class='col-sm-12' style='margin-bottom: 20px;''>
                            <h4 class='brief'>$data[nama_loket]</h4>
                            <div class='left col-xs-12'>
                              <ul class='list-unstyled'>
                                <li><i class='fa fa-map-marker'></i> $data[posisi] </li>
                                <li><i class='fa fa-ticket'></i>"; if($total_tiket<=0){echo "&nbsp;Belum ada transaksi";}else{ echo "&nbsp;Tiket Terjual $total_tiket Lembar";} 
                                echo "</li>
                                <li><i class='fa fa-money'></i>"; if($total_pendapatan['pendapatan'] <=0){echo "&nbsp;Belum ada transaksi";}else{echo "&nbsp;Pendapatan $total_uang";} 
                                echo "</li>
                              </ul>
                            </div>
                          </div>
                          <div class='col-xs-12 bottom text-center'>
                            <div class='col-xs-12 col-sm-6 emphasis'>
                              <p>Petugas</p>
                            </div>
                            <div class='col-xs-12 col-sm-6 emphasis'>
                              <button type='button' class='btn btn-primary btn-xs'>
                                <i class='fa fa-user'> </i> $petugas[nama_lengkap]
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>";
                      
                      }
                      ?>

                </div>
                

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />