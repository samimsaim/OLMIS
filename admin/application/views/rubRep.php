<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?=base_url()?>index.php/mainPageController/index">صفحه اصلی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/carController/index">گزارش  ماهوار</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b> گزارشات عمومی (<?php echo $_GET['id']; ?>)</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">گزارش  ات ماهوار سال (<?php echo$_GET['id']; ?>)</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/taqebiReportController/allReports?id=<?=$_GET['id']?>" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            
                <div class="portlet-body">
                    <!-- BEGIN PAGE CONTENT-->
            <div class="tiles" style="margin-right: 160px;" >
               
            <a href="<?=base_url()?>index.php/taqebiReportController/firstRubRep?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-green-meadow">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش   ربع اول</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/taqebiReportController/secondRub?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-blue-soft">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش   ربع دوم</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/taqebiReportController/thirdRub?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-yellow">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش   ربع سوم</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/taqebiReportController/fourtRub?dat=<?=$_GET['id']?>">
                 <div class="tile double selected bg-red-pink">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ربع چهارم</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            </div>
           
            </div>
            <!-- END PAGE CONTENT-->
            
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>







