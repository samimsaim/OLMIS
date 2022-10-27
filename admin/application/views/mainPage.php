
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url()?>assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url()?>assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=base_url()?>assets/layouts/layout2/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/layouts/layout2/css/themes/blue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel">



                    </div>

                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">صفحه اصلی</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>صفحه اصلی</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat yellow">
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php
                                        $result=$this->db->query("SELECT * from makateb");
                                         ?>
                                        <span data-counter="counterup" data-value="1349"><?=$result->num_rows();?></span>
                                    </div>
                                    <div class="desc"> مکاتیب </div>
                                </div>
                                <a class="more" href="<?=base_url()?>index.php/makatebController/index"><h4> بیشتر
                                   </h4> <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green-meadow">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php
                                        $result=$this->db->query("SELECT * from araiz");
                                         ?>
                                        <span data-counter="counterup" data-value="12,5"><?=$result->num_rows();?></span> </div>
                                    <div class="desc"><h4>عرایض</h4></div>
                                </div>
                                <a class="more" href="<?=base_url()?>index.php/araizController/index"> <h4>بیشتر
                                   </h4> <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat yellow-lemon">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php
                                        $result=$this->db->query("SELECT * from ahkam_wa_hedayat");
                                         ?>
                                        <span data-counter="counterup" data-value="549"><?=$result->num_rows()?></span>
                                    </div>
                                    <div class="desc"><h4>احکام</h4></div>
                                </div>
                                <a class="more" href="<?=base_url()?>index.php/ahkamController/index"><h4> بیشتر</h4>
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat yellow-casablanca">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php
                                    //    $result=$this->db->query("SELECT nawyat from nawyat_maktob");
                                         ?>
                                        <span data-counter="counterup" data-value="12,5"><?=$result->num_rows();?></span> </div>
                                    <div class="desc"><h4>مکاتیب تعقیبی</h4></div>
                                </div>
                                <a class="more" href="<?=base_url()?>index.php/taqebiController/index"> <h4>بیشتر
                                   </h4> <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light ">
                                
                                <div class="portlet-body">
                                    <div class="row visible-ie8">
                                        <div class="col-md-12">
                                            <span class="label label-danger"> NOTE: </span> The Circle Dial plugin is not compatible with Internet Explorer 8 and older. </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>فیصدی مکاتب ارسال شده</h4>
                                            <input class="knob" data-width="100" data-displayinput=false value="35" data-fgcolor="#f5d13f"> </div>
                                        <div class="col-md-4">
                                            <h4>فیصدی مکاتب تعقیبی</h4>
                                            <input class="knob" data-width="150" data-cursor=true data-fgcolor="#a6002f" data-thickness=.3 value="29"> </div>
                                        <div class="col-md-4">
                                            <h4>فیصدی مکاتب صادره</h4>
                                            <input class="knob" data-width="200" data-min="-100" data-displayprevious=true value="44" data-fgcolor="#6b2727"> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>فیصدی مکاتب وارده</h4>
                                            <input class="knob" data-angleoffset=90 value="35"> </div>
                                        <div class="col-md-4">
                                            <h4>فیصدی مکاتب تحت کار</h4>
                                            <input class="knob" data-angleoffset=-8 data-anglearc=360 data-fgcolor="#7bbd00" value="96"> </div>
                                        <div class="col-md-4">
                                            <h4>فیصدی  عرایض</h4>
                                            <input class="knob" data-min="0" data-max="100" value="60" data-fgcolor="#0f00db"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                    </div>

                <!-- END CONTENT BODY -->
            </div>

      <!--   <script src="<?=base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="<?=base_url()?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

        <script src="<?=base_url()?>assets/global/plugins/moment.min.js" type="text/javascript"></script>

        <script src="<?=base_url()?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>

        <script src="<?=base_url()?>assets/global/scripts/app.min.js" type="text/javascript"></script>

        <script src="<?=base_url()?>assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>

        <script src="<?=base_url()?>assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script> -->
 <script src="<?=base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?=base_url()?>assets/global/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url()?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url()?>assets/pages/scripts/components-knob-dials.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?=base_url()?>assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>