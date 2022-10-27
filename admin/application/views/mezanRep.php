<!-- BEGIN CONTENT -->
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
                    <b>استفاده کننده ها</b>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6" style=" margin-bottom: -8px;">
                                    <button onclick="window.print();" class="btn-circle btn-defualt">print</button>   
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">

                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="portlet-body table-both-scroll">
                                    <table class="table table-striped table-bordered table-hover order-column" id="">
                                        <thead>
                                            <tr style="background-color: #bcc8cf; ">
                                                <th style="text-align: center; width: 20px;">شماره</th>
                                                <th style="text-align: center; width: 200px;">مرجع ارسال</th>
                                                <th style="text-align: center; width: 300px;" >مرجع دریافت</th>
                                                <th style="text-align: center; width: 100px;">صادره</th>
                                                <th style="text-align: center; width: 100px;">وارده</th>
                                                <th style="text-align: center; width: 100px;">تعقیبی</th>
                                                <th style="text-align: center; width: 100px;">اجرا شده</th>
                                                <th style="text-align: center; width: 100px;">تحت کار</th>
                                                <th style="text-align: center; width: 100px;">اجرا ناشده</th>
                                                 <th style="text-align: center; width: 100px;">فیصدی صادره</th>
                                                <th style="text-align: center; width: 100px;">فیصدی وارده</th>
                                                <th style="text-align: center; width: 100px;">فیصدی تعقیبی</th>
                                                <th style="text-align: center; width: 100px;">فیصدی اجرا شده</th>
                                                <th style="text-align: center; width: 100px;"> فیصدی تحت کار</th>
                                                <th style="text-align: center; width: 100px;">فیصدی اجرا نشده</th>
                                                <th style="text-align: center; width: 100px;">ملاحظات</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                            <?php foreach($data as $row){ $x=1; ?>
                                            <tr>
                                                
                                                <td><?=$x?></td>
                                                <td><?=$row->mursal?></td>
                                                <td><?=$row->mursal_elai?></td>
                                                <?php 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data=$this->db->query("SELECT sadra_number FROM makateb WHERE mursal_elai='$row->mursal_elai' AND sadra_number!=' 'AND sadra_number!='0'  AND '$year1'='$year' AND '$mount1'='07'");
                                                $query=$data->num_rows();
                                                        ?>
                                                <td><?php echo $query ?></td>
                                                   <?php 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data=$this->db->query("SELECT warda_number FROM makateb WHERE mursal_elai='$row->mursal_elai' AND warda_number!=' 'AND warda_number!='0'  AND '$year1'='$year' AND '$mount1'='07'");
                                                $query=$data->num_rows();
                                                        ?>
                                                <td><?=$query?></td>
                                                <?php 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data=$this->db->query("SELECT ID_category FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_category!=' 'AND ID_category!='0' AND ID_category='2' AND '$year1'='$year' AND '$mount1'='07'");
                                                $query=$data->num_rows();
                                                        ?>
                                                <td><?=$query?></td>
                                                 <?php 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='1' AND '$year1'='$year' AND '$mount1'='07'");
                                                $query=$data->num_rows();
                                                        ?>
                                                <td><?=$query?></td>
                                                 <?php 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='2' AND '$year1'='$year' AND '$mount1'='07'");
                                                $query=$data->num_rows();
                                                        ?>
                                                <td><?=$query?></td>
                                                <?php 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='3' AND '$year1'='$year' AND '$mount1'='07'");
                                                $query=$data->num_rows();
                                                        ?>
                                                <td><?=$query?></td>
                                                 <?php 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data1=$this->db->query("SELECT sadra_number FROM makateb WHERE mursal_elai='$row->mursal_elai' AND sadra_number!=' 'AND sadra_number!='0'  AND '$year1'='$year' AND '$mount1'='07'");
                                                $query1=$data1->num_rows();
                                               $date3 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year3=$date1->format("Y");
                                                $mount3= $date1->format("m");
                                                $date2 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year2=$date2->format("Y");
                                                $moun2t= $date2->format("m");
                                                   
                                                $data2=$this->db->query("SELECT warda_number FROM makateb WHERE mursal_elai='$row->mursal_elai' AND warda_number!=' 'AND warda_number!='0'  AND '$year3'='$year2' AND '$mount3'='07'");
                                                $query2=$data2->num_rows();
                                                if($query1!=0){
                                                $result=($query1/($query1+$query2)*100);
                                            }else{$result=0;}
                                                        ?>
                                                <td> % <?=substr($result,0,4)?></td>
                                                   <?php 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data1=$this->db->query("SELECT sadra_number FROM makateb WHERE mursal_elai='$row->mursal_elai' AND sadra_number!=' 'AND sadra_number!='0'  AND '$year1'='$year' AND '$mount1'='07'");
                                                $query1=$data1->num_rows();
                                               $date3 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year3=$date1->format("Y");
                                                $mount3= $date1->format("m");
                                                $date2 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year2=$date2->format("Y");
                                                $moun2t= $date2->format("m");
                                                   
                                                $data2=$this->db->query("SELECT warda_number FROM makateb WHERE mursal_elai='$row->mursal_elai' AND warda_number!=' 'AND warda_number!='0'  AND '$year1'='$year' AND '$mount3'='07'");
                                                $query2=$data2->num_rows();
                                                if($query2!=0){
                                                $result=($query2/($query1+$query2)*100);
                                            }else {
                                                $result=0;
                                            }
                                                        ?>
                                                <td> % <?=substr($result,0,4)?></td>
                                                 <?php
                                                 /////////////////////////////////////////////// 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data1=$this->db->query("SELECT ID_category FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_category!=' 'AND ID_category!='0' AND ID_category='1' AND '$year1'='$year' AND '$mount1'='07'");
                                                $query1=$data1->num_rows();
                                                /////////////////////////////////////////////////////////

                                                $date2 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year2=$date2->format("Y");
                                                $mount2= $date2->format("m");
                                                $date1 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                   
                                                $data2=$this->db->query("SELECT ID_category FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_category!=' 'AND ID_category!='0' AND ID_category='2' AND '$year2'='$year1' AND '$mount2'='07'");
                                                $query2=$data2->num_rows();
                                                ///////////////////////////////////////////////////////////
                                                   
                                                $date3 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year3=$date3->format("Y");
                                                $mount3= $date3->format("m");
                                                $date2 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year2=$date2->format("Y");
                                                $mount2= $date2->format("m");
                                                   
                                                $data3=$this->db->query("SELECT ID_category FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_category!=' 'AND ID_category!='0' AND ID_category='3' AND '$year3'='$year2' AND '$mount3'='07'");
                                                $query3=$data3->num_rows();
                                                /////////////////////////////////////////////////////
                                                 
                                                $date4 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year4=$date4->format("Y");
                                                $mount4= $date4->format("m");
                                                $date3 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year3=$date3->format("Y");
                                                $mount3= $date3->format("m");
                                                   
                                                $data4=$this->db->query("SELECT ID_category FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_category!=' 'AND ID_category!='0' AND ID_category='4' AND '$year4'='$year3' AND '$mount4'='07'");
                                                $query4=$data4->num_rows();
                                                if($query2!=0){
                                                $result2=($query2/($query1+$query2+$query3+$query4)*100);
                                                }else{$result2=0;}        
                                                        ?>
                                                <td> % <?=substr($result2,0,4)?></td>
                                                 <?php
                                                 /////////////////////////////////////////////// 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data1=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='1' AND '$year1'='$year' AND '$mount1'='07'");
                                                $query1=$data1->num_rows();
                                                /////////////////////////////////////////////////////////

                                                $date2 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year2=$date2->format("Y");
                                                $mount2= $date2->format("m");
                                                $date1 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                   
                                                $data2=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='2' AND '$year2'='$year1' AND '$mount2'='07'");
                                                $query2=$data2->num_rows();
                                                ///////////////////////////////////////////////////////////
                                                   
                                                $date3 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year3=$date3->format("Y");
                                                $mount3= $date3->format("m");
                                                $date2 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year2=$date2->format("Y");
                                                $mount2= $date2->format("m");
                                                   
                                                $data3=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='3' AND '$year3'='$year2' AND '$mount3'='07'");
                                                $query3=$data3->num_rows();
                                               if($query1!=0){
                                                $result3=($query1/($query1+$query2+$query3)*100);
                                                }else{$result3=0;}        
                                                        ?>
                                                <td>%<?=substr($result3,0,4)?></td>
                                                  <?php
                                                 /////////////////////////////////////////////// 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data1=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='1' AND '$year1'='$year' AND '$mount1'='07'");
                                                $query1=$data1->num_rows();
                                                /////////////////////////////////////////////////////////

                                                $date2 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year2=$date2->format("Y");
                                                $mount2= $date2->format("m");
                                                $date1 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                   
                                                $data2=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='2' AND '$year2'='$year1' AND '$mount2'='07'");
                                                $query2=$data2->num_rows();
                                                ///////////////////////////////////////////////////////////
                                                   
                                                $date3 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year3=$date3->format("Y");
                                                $mount3= $date3->format("m");
                                                $date2 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year2=$date2->format("Y");
                                                $mount2= $date2->format("m");
                                                   
                                                $data3=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='3' AND '$year3'='$year2' AND '$mount3'='07'");
                                                $query3=$data3->num_rows();
                                               if($query2!=0){
                                                $result4=($query2/($query1+$query2+$query3)*100);  
                                                }else{$result4=0;}      
                                                        ?>
                                                <td> % <?=substr($result4,0,4)?></td>
                                                 <?php
                                                 /////////////////////////////////////////////// 
                                                $date1 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                $date = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year=$date->format("Y");
                                                $mount= $date->format("m");
                                                   
                                                $data1=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='1' AND '$year1'='$year' AND '$mount1'='07'");
                                                $query1=$data1->num_rows();
                                                /////////////////////////////////////////////////////////

                                                $date2 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year2=$date2->format("Y");
                                                $mount2= $date2->format("m");
                                                $date1 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year1=$date1->format("Y");
                                                $mount1= $date1->format("m");
                                                   
                                                $data2=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='2' AND '$year2'='$year1' AND '$mount2'='07'");
                                                $query2=$data2->num_rows();
                                                ///////////////////////////////////////////////////////////
                                                   
                                                $date3 = DateTime::createFromFormat("Y-m-d", $row->date);
                                                $year3=$date3->format("Y");
                                                $mount3= $date3->format("m");
                                                $date2 = DateTime::createFromFormat("Y-m-d", $_GET['dat']);
                                                $year2=$date2->format("Y");
                                                $mount2= $date2->format("m");
                                                   
                                                $data3=$this->db->query("SELECT ID_ejraat_result FROM makateb WHERE mursal_elai='$row->mursal_elai' AND ID_ejraat_result!=' 'AND ID_ejraat_result!='0' AND ID_ejraat_result='3' AND '$year3'='$year2' AND '$mount3'='07'");
                                                $query3=$data3->num_rows();
                                               if($query3!=0){
                                                $result5=($query3/($query1+$query2+$query3)*100);
                                                }else{$result5=0;}        
                                                        ?>

                                                <td> % <?=substr($result5,0,4)?></td>
                                                <td>  </td>
                                            </tr>
                                         <?php $x++; }?>
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
            window.location=url+"index.php/usersController/delete_user?id="+id;
        else
            return false;
    }
</script>
 <script type="text/javascript">
    var url="<?php echo base_url(); ?>";
    function aproverecord(id){
        var r=confirm("آیا میخواهید تایید نماید")
        if(r==true)
            window.location=url+"index.php/usersController/aprove?id="+id;
        else
            return false;
    }
</script>
 <script type="text/javascript">
    var url="<?php echo base_url(); ?>";
    function disaproverecord(id){
        var r=confirm("آیا میخواهید رد نماید")
        if(r==true)
            window.location=url+"index.php/usersController/disaprove?id="+id;
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
                    <a href="<?php echo base_url()?>index.php/usersController/index" class="btn btn-circle green-meadow">بستن</a>
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
