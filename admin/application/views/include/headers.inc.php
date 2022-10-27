<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	 <meta charset="utf-8" />
        <title><?=$result;?></title>
        <!-- ///////////////////////////////////////////// -->
<?php require_once 'jdf.php'; ?>
<link href="<?=base_url()?>assets/asset/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/asset/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/asset/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/asset/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/asset/global/plugins/bootstrap-select/bootstrap-select-rtl.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/asset/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/asset/global/plugins/jquery-multi-select/css/multi-select-rtl.css"/>
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url()?>assets/asset/global/css/components-md-rtl.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/asset/global/css/plugins-md-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/asset/admin/layout/css/layout-rtl.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url()?>assets/asset/admin/layout/css/themes/darkblue-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/asset/admin/layout/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
                <!-- ///////////////////////////////////////// -->

        <link href="<?=base_url()?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url()?>assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />

        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->


        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

        <!-- ///////////////////////////////////////////// -->
       <script src="<?=base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
        <link href="<?=base_url()?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/material/css/mdb.css" rel="stylesheet" type="text/css" />

        <link href="<?=base_url()?>assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <link href="<?=base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/css/components-md-rtl.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url()?>assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/layouts/layout2/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/layouts/layout2/css/themes/blue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=base_url()?>assets/layouts/layout2/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />

 </head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">

                    <div class="menu-toggler sidebar-toggler">
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>


                <div class="page-top">

                    <form class="search-form search-form-expanded" action="" method="GET">

                    </form>

                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">


                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">


                                    <span class="username username-hide-on-mobile"><?=ucfirst($_SESSION['name'])." ".ucfirst($_SESSION['lname']);?></span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">

                                    <li>
                                        <a href="<?=base_url()?>index.php/logoutController/index">
                                            <i class="icon-signout"></i> خروج </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         </div>
        <div class="clearfix"> </div>
        <div class="page-container">
           <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

                         <li class="nav-item <?php echo activate_menu('mainPageController');?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-home"></i>
                                <span class="title">صفحه اصلی</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start <?php echo activate_menu('mainPageController'); ?>">
                                    <a href="<?=base_url()?>index.php/mainPageController/index" class="nav-link nav-toggle">
                                        <span class="title">صقحه اصلی</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item <?php echo activate_menu('araizController');?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-file-text-o"></i>
                                <span class="title">عرایض</span>

                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start">
                                    <a href="<?=base_url()?>index.php/araizController/index" class="nav-link nav-toggle">
                                        <span class="title">عرایض موجود</span>

                                    </a>
                                </li>

                            </ul>
                        </li>
                         <li class="nav-item <?php echo activate_menu('makatebController');?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-book"></i>
                                <span class="title">مکاتیب</span>

                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="<?=base_url()?>index.php/makatebController/index" class="nav-link nav-toggle">
                                        <span class="title">مکاتیب موجود</span>

                                    </a>
                                </li>

                              <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/sadraController/index" class="nav-link nav-toggle">
                                        <span class="title">صادره</span>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/wardaController/index" class="nav-link nav-toggle">
                                        <span class="title">وارده</span>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/taqebiController/index" class="nav-link nav-toggle">
                                        <span class="title">تعقیبی</span>

                                    </a>
                                </li>

                            </ul>
                        </li>
                         <li class="nav-item <?php echo activate_menu('ahkamController');?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-check"></i>
                                <span class="title">احکام و هدایات</span>
															</a>
															<ul class="sub-menu">
																	<li class="nav-item start">
																			<a href="<?=base_url()?>index.php/ahkamController/index" class="nav-link nav-toggle">
																					<span class="title">احکام</span>

																			</a>
																	</li>

															</ul>
													</li>
													<li class="nav-item <?php echo activate_menu('reportsController');?>">
                             <a href="javascript:;" class="nav-link nav-toggle">
                                 <i class="fa fa-book"></i>
                                 <span class="title">تهیه راپور</span>

                             </a>
                             <ul class="sub-menu">
                                 <li class="nav-item ">
                                     <a href="<?=base_url()?>index.php/reportsController/index" class="nav-link nav-toggle">
                                         <span class="title">راپور عمومی</span>

                                     </a>
                                 </li>

                               <li class="nav-item start">
                                     <a href="<?=base_url()?>index.php/taqebiReportController/index" class="nav-link nav-toggle">
                                         <span class="title">راپور مکاتیب تعقیبی</span>

                                     </a>
                                 </li>

															</ul>
 													</li>

													<li class="nav-item <?php echo activate_menu('othersController');?>">
                             <a href="javascript:;" class="nav-link nav-toggle">
                                 <i class="fa fa-ellipsis-h"></i>
                                 <span class="title">سایر</span>
 															</a>
 															<ul class="sub-menu">
 																	<li class="nav-item start">
 																			<a href="<?=base_url()?>index.php/shuabatController/index" class="nav-link nav-toggle">
 																					<span class="title">شعبات</span>

 																			</a>
 																	</li>


																	<li class="nav-item start">
																			<a href="<?=base_url()?>index.php/dosya_archiveController/index" class="nav-link nav-toggle">
																					<span class="title">دوسیه آرشیف</span>

																			</a>
																	</li>

															</ul>
 													</li>






                        <?php if($_SESSION["privilege"] == "admin"):?>
                          <li class="nav-item <?php echo activate_menu('usersController'); ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-users"></i>
                                <span class="title">مدیریت استفاده کننده ها</span>

                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/usersController/index" class="nav-link nav-toggle">
                                        <span class="title">استفاده کنندها</span>

                                    </a>
                                </li>

                            </ul>
                        </li>
                        <?php endif?>
                     </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
