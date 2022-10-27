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
                <li><?php $date2 = DateTime::createFromFormat("Y-m-d", $_GET['id']);
                                                $year=$date2->format("Y"); ?>
                    <b> گزارشات عمومی  سلل (<?php echo $year; ?>)</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">گزارش  ات ماهوار سال (<?php echo$year; ?>)</span>
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
               
            <a href="<?=base_url()?>index.php/taqebiReportController/hamalRep?dat=<?=$_GET['id']?>">
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
                            <b style="font-size: 20px;">گزارش  ماه  حمل</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/taqebiReportController/sawrRep?dat=<?=$_GET['id']?>">
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
                            <b style="font-size: 20px;">گزارش  ماه ثور</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/taqebiReportController/jawzaRep?dat=<?=$_GET['id']?>">
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
                            <b style="font-size: 20px;">گزارش  ماه جوزا</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/taqebiReportController/saratanRep?dat=<?=$_GET['id']?>">
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
                            <b style="font-size: 20px;">گزارش ماه سرطان</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            </div>
             <div class="tiles" style="margin-right: 160px;" >
               
            <a href="<?=base_url()?>index.php/taqebiReportController/asadRep?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-yellow-soft">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ماه  اسد</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/taqebiReportController/snblaRep?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-yellow-casablanca">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ماه سنبله</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/taqebiReportController/mezanRep?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-purple-sharp">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ماه  میزان</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/taqebiReportController/aqrabRep?dat=<?=$_GET['id']?>">
                 <div class="tile double selected bg-grey-cascade">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش ر عقرب</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            </div>
             <div class="tiles" style="margin-right: 160px;" >
               
            <a href="<?=base_url()?>index.php/taqebiReportController/qawsRep?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-green-sharp">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ماه قوس</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/taqebiReportController/jadeRep?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-yellow-gold">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ماه جدی</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/taqebiReportController/dalwaRep?dat=<?=$_GET['id']?>">
                <div class="tile double selected bg-red-thunderbird">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ماه  دلو</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/taqebiReportController/hotRep?dat=<?=$_GET['id']?>">
                 <div class="tile double selected bg-green">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ماه  حوت</b>
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







