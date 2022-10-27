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
                <b>راپور عمومی</b>
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
                            <!--    <div class="btn-group">
                                   <a href="<?php echo base_url()?>index.php/makatebController/addmakateb"  class="btn btn-circle green-meadow">اضافه نمودن<i class="fa fa-plus"></i></a>
                                </div>  -->
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">

                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>

                                <th style="text-align: center;">مرجع دریافت</th>
                                <th style="text-align: center;"> صادره</th>
                                <th style="text-align: center;">وارده</th>
                                <th style="text-align: center;">تعقیبی</th>
                                <th style="text-align: center;">اجرا شده</th>
                                <th style="text-align: center;">تحت کار</th>
                                <th style="text-align: center;">اجرا نشده</th>
                                <th style="text-align: center;">فیصدی صادره</th>
                                <th style="text-align: center;">فیصدی وارده</th>
                                <th style="text-align: center;">فیصدی تعقیبی</th>
                                <th style="text-align: center;">فیصدی اجرا شده</th>
                                <th style="text-align: center;">فیصدی تحت کار</th>
                                <th style="text-align: center;">فیصدی اجرا نشده</th>
<!--   <th style="text-align: center;">ملاحظات</th>  -->

                            </tr>
                        </thead>
                        <tbody>
                          <?php
                              $query = $this->db->get('total');
                              foreach ($query->result() as $row)
                              $query = $this->db->get('percentage');
                              foreach ($query->result() as $row)
                              { ?>
                                <tr>
                                  <td> <?php echo $row->mursal_elai ?> </td>
                                  <td> <?php echo $row->sadara ?> </td>
                                  <td> <?php echo $row->warada ?> </td>
                                  <td> <?php echo $row->taqebi ?> </td>
                                  <td> <?php echo $row->ejraShuda ?> </td>
                                  <td> <?php echo $row->tahtKar ?> </td>
                                  <td> <?php echo $row->ejraNshuda ?> </td>
                                  <td> <?php echo $row->sPercentage ?> </td>
                                  <td> <?php echo $row->wPercentage ?> </td>
                                  <td> <?php echo $row->tPercentage ?> </td>
                                  <td> <?php echo $row->esPercentage ?> </td>
                                  <td> <?php echo $row->tkPercentage ?> </td>
                                  <td> <?php echo $row->enPercentage ?> </td>


                                </tr>
                              <?php } ?>

                        <!--      <?php
                                  $query = $this->db->get('percentage2');
                                  foreach ($query->result() as $row)
                                  { ?>
                                    <tr>
                                      <td> <?php echo $row->asaPercentage ?> </td>
                                      <td> <?php echo $row->awPercentage ?> </td>
                                      <td> <?php echo $row->taPercentage ?> </td>
                                      <td> <?php echo $row->aePercentage ?> </td>
                                      <td> <?php echo $row->atkPercentage ?> </td>
                                      <td> <?php echo $row->aenPercentage ?> </td>  </tr>
                                  <?php } ?>  -->




                           </tbody>
                       </table>
                       <div class="">

                       </div>
                   </div>
               </div><!-- END EXAMPLE TABLE PORTLET-->
           </div>
       </div>
    </div>
   </div>
   </div>

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
                       <h4 class="modal-title" style="color:<?php if(isset($Type) && $Type == 'success')echo '#000000';else echo 'red';?>;font-weight: bold"><?php if(isset($Type) && $Type == 'success') echo 'موفقانه!';elseif(isset($Type) && $Type =='failed') echo 'متاسفانه!'?></h4>
                   </div>
                   <div class="modal-body">
                       <p style="color:<?php if(isset($Type) && $Type == 'success')echo 'green';else echo 'red';?>;font-size: 20px"><?=$Message?></p>
                   </div>
                   <div class="modal-footer">
                       <a href="<?php echo base_url()?>index.php/reportsController/index" class="btn btn-circle green-meadow">بستن</a>
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
