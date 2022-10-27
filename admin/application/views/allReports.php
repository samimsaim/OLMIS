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
                    <a href="<?=base_url()?>index.php/carController/index">گزارش سالانه</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li><?php $date2 = DateTime::createFromFormat("Y-m-d", $_GET['id']);
                                                $year=$date2->format("Y"); ?>
                    <b> گزارشات عمومی  سال (<?php echo $year; ?>)</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">گزارش سال (<?php echo$year; ?>)</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/taqebiReportController/years" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            
                <div class="portlet-body">
                    <!-- BEGIN PAGE CONTENT-->
            <div class="tiles" style="margin-right: 200px;" >
               
            <a href="<?=base_url()?>index.php/taqebiReportController/monthRep?id=<?=$_GET['id']?>">
                <div class="tile double selected bg-green-turquoise">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ماه وار</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/taqebiReportController/rubRep?id=<?=$_GET['id']?>">
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
                            <b style="font-size: 20px;">گزارش ربع وار</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/taqebiReportController/yearlyRep?dat=<?=$_GET['id']?>">
                 <div class="tile double selected bg-purple">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش سالانه</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            </div>
            <!-- END PAGE CONTENT-->
            
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>







