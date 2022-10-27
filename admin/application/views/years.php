<!-- BEGIN CONTENT -->
<!-- <link rel="stylesheet" href="<?=base_url()?>../assets/datepicker/dari.datepicker.min.css"> -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?=base_url()?>index.php/mainPageController/index">صفحه اصلی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/carController/khedmateCar">گزارش سالانه</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>گزارش سالانه</b>
                </li>
            </ul>
        </div>
                <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">گزارش سالانه</span>
                                    </div>
                                    <div class="actions">
                                   
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                    <?php if($_SESSION['privilege']==1){ ?>
                                    <div class="btn-group">
                                        <a  class="btn btn-circle green-meadow" data-toggle="modal" data-target="#myModal">اضافه نمودن<i class="fa fa-plus"></i></a>
                                    </div>
                                <?php }?>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th style="text-align: center;">سال</th>
                                                <th style="text-align: center;">تنظیمات</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                            <?php foreach($data as $row){ ?>
                                             <tr class="odd gradeX">

                                              <td style="text-align: center;">
                                                <?php 
                                                $date2 = DateTime::createFromFormat("Y-m-d", $row->year);
                                                $year2=$date2->format("Y");
                                                echo $year2;
                                                ?>  
                                                </td>
                                              
                                              <td style="text-align: center;"><a href="<?=base_url()?>index.php/taqebiReportController/allReports?id=<?=$row->year?>" class="btn  btn-icon-only btn-circle green-meadow"title="جزئیات">جزئیات</a>
                                             <?php if($_SESSION['privilege']==1){ ?>  <a href="<?=base_url()?>index.php/taqebiReportController/deleteYear?id=<?=$row->year?>" class="btn  btn-icon-only btn-circle btn-danger"title="حذف">خذف</a><?php }?>
                                              </td> 
                                            </tr>
                                          <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                  </div>
               </div>
<script type="text/javascript">
    var url="<?php echo base_url(); ?>";
    function delete_record(id){
        var r=confirm("آیا میخواهد که این ریکارد را حذف کنید؟")
        if(r==true)
            window.location=url+"index.php/KandidController/DeletKanData?id="+id;
        else
            return false;
    }
</script>

<?php
if (isset($Message) && isset($Type)) {
    ?>
    <div id="success" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismis="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:<?php if(isset($Type) && $Type == 'success')echo 'green';else echo 'red';?>;font-weight: bold"><?php if(isset($Type) && $Type == 'success') echo 'موفقانه!';elseif(isset($Type) && $Type =='failed') echo 'متاسفانه!'?></h4>
                </div>
                <div class="modal-body">
                    <p style="color:<?php if(isset($Type) && $Type == 'success')echo 'green';else echo 'red';?>;font-size: 20px"><?=$Message?></p>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url()?>index.php/usersController/index" class="btn btn-primary">بستن</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(window).load(function () {
            // this code prevent closing when the user clicking to out of modal area
            $('#success').modal({backdrop: 'static', keyboard: false});
            $('#success').modal('show');
        });
    </script>
<?php } ?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" align="right" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title">اضافه نمو دن سال</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=base_url()?>index.php/taqebiReportController/addYear">
                    <div class="form-group">
                        <div class="form-group form-md-line-input col-md-6 has-success">
                            <input style="text-align: right;"  type="text" id="usage" name="date" class="form-control date" id="form_control_1" placeholder="تاریخ"  required>
                            <label for="form_control_1">سال</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer" style="margin-top: 90px;" >
                <button type="button" class="btn btn-circle yellow-gold" align="right" data-dismiss="modal">لغو</button>
                <input type="submit" name="add_roll" class="btn btn-circle green-meadow" value="ثبت" >
                </form>
            </div>
        </div>
    </div>
</div>
