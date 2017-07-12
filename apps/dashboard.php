<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <img src="../assets/images/urindo.png" style="margin-left: 150px;">

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                               <img src="../assets/images/tmii.png">

                            </div>
                        </div>
                    </div>

                  
                    
  <!-- <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Daily active users <small>Sessions</small></h2>
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
                                <ul class="list-unstyled msg_list">
                                    <li>
                                        <a>
                                            <span class="image">
                                    <img src="../assets/images/img.jpg" alt="img" />
                                </span>
                                            <span>
                                    <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that 
                                </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                    <img src="../assets/images/img.jpg" alt="img" />
                                </span>
                                            <span>
                                    <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that 
                                </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                    <img src="../assets/images/img.jpg" alt="img" />
                                </span>
                                            <span>
                                    <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that 
                                </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                    <img src="../assets/images/img.jpg" alt="img" />
                                </span>
                                            <span>
                                    <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that 
                                </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="clearfix"></div>

<script type="text/javascript">
        var permanotice, tooltip, _alert;
        $(function () {
            new PNotify({
                title: "Hai <?php echo "$_SESSION[nama_user]"; ?>",
                type: "dark",
                text: "Selamat datang di aplikasi penjualan tiket <i class='fa fa-smile-o'></i><br><br>",
                nonblock: {
                    nonblock: true
                },
                before_close: function (PNotify) {
                    // You can access the notice's options with this. It is read only.
                    //PNotify.options.text;

                    // You can change the notice's options after the timer like this:
                    PNotify.update({
                        title: PNotify.options.title + " - Welcome",
                        before_close: null
                    });
                    PNotify.queueRemove();
                    return false;
                }
            });

        });
    </script>

