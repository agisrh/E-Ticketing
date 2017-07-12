<?php
$row = $query->get_transaksi($_GET['id']);
$tiket=$query->get_tiket($row['kode_tiket']);
$loket=$query->get_loket($row['id_loket']);
$staff=$query->get_user($row['id_user']);
$tanggal = tgl_indo($row['tanggal']);
?>
<div class="row">

            <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaksi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-8 col-lg-8 col-sm-7">
                      <!-- blockquote -->
                      <blockquote>
                        <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title">Invoice <span style="color: #26B99A;"><?php echo "$row[no_trans]"; ?></span></h3>


                          <br />
                          <h5>Detail Transaksi</h5>
                          <ul class="list-unstyled project_files">
                            <li><a href=""><i class="fa fa-ticket"></i> <span style="color: #26B99A;">Tiket :</span> <?php echo "$tiket[nama_tiket]"; ?></a>
                            </li>
                            <li><a href=""><i class="fa fa-home"></i> <span style="color: #26B99A;">Loket :</span> <?php echo "$loket[nama_loket]"; ?></a>
                            </li>
                            <li><a href=""><i class="fa fa-user"></i> <span style="color: #26B99A;">Petugas :</span> <?php echo "$staff[nama_lengkap]"; ?></a>
                            </li>
                            <li><a href=""><i class="fa fa-calendar-o"></i> <span style="color: #26B99A;">Tanggal :</span> <?php echo "$tanggal"; ?></a>
                            </li>
                            <li><a href=""><i class="fa fa-clock-o"></i> <span style="color: #26B99A;">Jam :</span> <?php echo "$row[jam]"; ?> WIB</a>
                            </li>
                          </ul>
                          <br />

                        </div>



                      <div class="">
                        <div class="product_price">
                          <h1 class="price"><?php echo "Rp.$row[total].-"; ?></h1>
                          <span class="price-tax"><?php echo "($row[jumlah] x Rp.$tiket[harga])"; ?></span>
                          <br>
                        </div>
                      </div>


                    </div>
                      </blockquote>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-5">
                      <img src="../assets/images/tmii.png" height="150px;">
                    </div>

                    <div class="clearfix"></div>

                   <!--  <div class="col-md-12">
                      <h4>Labels and badges</h4>
                      <span class="label label-default">Default</span>
                      <span class="label label-primary">Primary</span>
                      <span class="label label-success">Success</span>
                      <span class="label label-info">Info</span>
                      <span class="label label-warning">Warning</span>
                      <span class="label label-danger">Danger</span>
                      <span class="badge bg-green">42</span>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            </div>
