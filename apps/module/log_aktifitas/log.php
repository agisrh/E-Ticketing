 <div class="col-md-12  col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-history"></i> &nbsp;Log Aktifitas <small><?php echo "( $_SESSION[nama_user] )"; ?></small></h2>
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

                    <div class="col-xs-8">
                      <!-- Tab panes -->
                      <div class="tab-content">
                      <div class="tab-pane active" id="today-r">
                          <?php require_once 'module/log_aktifitas/today.php'; ?>  
                        </div>
                        <div class="tab-pane" id="yesterday-r">
                          <?php require_once 'module/log_aktifitas/yesterday.php'; ?>  
                        </div>
                        <div class="tab-pane" id="week-r">
                           <?php require_once 'module/log_aktifitas/week.php'; ?>
                        </div>
                        <div class="tab-pane" id="month-r">
                          <?php require_once 'module/log_aktifitas/month.php'; ?>
                        </div>
                        <div class="tab-pane" id="year-r">
                           <?php require_once 'module/log_aktifitas/year.php'; ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-right">
                        <li class="active"><a href="#today-r" data-toggle="tab">Hari ini</a>
                        </li>
                        <li><a href="#yesterday-r" data-toggle="tab">Kemarin</a>
                        </li>
                        <li><a href="#week-r" data-toggle="tab">Minggu ini</a>
                        </li>
                        <li><a href="#month-r" data-toggle="tab"><?php echo getBulan(date("m")); ?></a>
                        </li>
                        <li><a href="#year-r" data-toggle="tab"><?php echo date("Y"); ?></a>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12"><br>
        <div class="x_panel tile fixed_height_300">
                <div class="x_title">
                        <h2>Aktifitas</h2>
                 <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
            <div class="clearfix"></div>
        </div>
            
            <div class="animated flipInY tile_stats_count">
                <?php
                // Persentasi aktifitas bulan ke tahun
                $tahun        = mysql_query( "SELECT * FROM log_aktifitas WHERE YEAR(tanggal) = YEAR(now()) AND id_user='$_SESSION[id_user]'");
                $jumlah_tahun = mysql_num_rows($tahun);
                $bulan        = mysql_query("SELECT * FROM log_aktifitas WHERE DATE_FORMAT(tanggal,'%Y %m')=DATE_FORMAT(NOW(),'%Y %m') AND id_user='$_SESSION[id_user]'");
                $jumlah_bulan = mysql_num_rows($bulan);
                $persentase   = ($jumlah_bulan*100)/$jumlah_tahun;
                $persen       = round($persentase);
                ?>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-history"></i> Total Activity <?php echo "( ".getBulan(date("m"))." )"; ?></span>
                            <div class="count green"><?php echo $jumlah_bulan; ?></div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i><?php echo "$persen"; ?> %  </i> from this year</span> 
                        </div>
            </div>  
            
            
            
            <div class="x_content">
                                <div class="dashboard-widget-content">
                                    <ul class="quick-list">
                                        <?php
                                        $row = $query->get_user($_SESSION[id_user]);
                                        ?>
                                        <li><a  data-toggle="tooltip" data-placement="top" title="Nama User">
                                                <i class="fa fa-user"></i><?php echo $_SESSION[nama_user]; ?></a>
                                        </li>
                                        <li><i class="fa fa-envelope" title="email"></i><a  data-toggle="tooltip" data-placement="top" title="Email">
                                            <?php echo $row[email]; ?></a>
                                        </li>
                                        </li>
                                        <li><i class="fa fa-retweet" title="Terakhir Login"></i><a  data-toggle="tooltip" data-placement="top" title="Login Terakhir">
                                            <?php echo waktu_indo($row[last_login]); ?></a>
                                        </li>
                                        
                                    </ul>           
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                  </div>

                </div>
              </div>
              <div class="clearfix"></div>