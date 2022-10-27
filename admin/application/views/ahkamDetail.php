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
                    <a href="<?=base_url()?>index.php/ahkamController/index">احکام</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>معلومات  احکام</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">معلومات عمومی احکام و هدایات</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/ahkamController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
              <?php foreach ($ahkam as $row) {} ?>
             <div class="portlet-body">
                   <div class="row">
                       <div class="col-md-9">
                           <div class="table-scrollable">

                               <table class="table table-hover">
                                   <tbody>
                                     <tr>
                                         <th>شماره مکتوب</th>
                                         <td><?=$row->shumara_maktob?></td>
                                     </tr>
                                   <tr>
                                       <th>نوعیت مکتوب</th>
                                       <?php $this->db->where('ID',$row->ID_nawyat_maktob);
                                             $this->db->from('nawyat_maktob');
                                             $naweatMaktob=$this->db->get()->result();
                                             foreach ($naweatMaktob as $NM) {}
                                        ?>
                                       <td><?=$NM->nawyat?></td>
                                   </tr>

                                   <tr>
                                       <th>تاریخ</th>
                                       <td><?=$row->date?></td>
                                   </tr>
                                   <tr>
                                       <th>مرسل</th>
                                       <td><?=$row->mursal?></td>
                                   </tr>
                                   <tr>
                                       <th>مرسل الیه</th>
                                       <td><?=$row->mursal_elai?></td>
                                   </tr>
                                   <tr>
                                       <th>خلاصه مطلب</th>
                                       <td><?=$row->khulas_matlab?></td>
                                   </tr>

                                   <tr>
                                  <th>نتیجه اجرات</th>
                                  <?php $this->db->where('ejraat_id',$row->ID_ejraat_result);
                                        $this->db->from('ejraat_result');
                                        $typeOfEjraat=$this->db->get()->result();
                                        foreach ($typeOfEjraat as $TOE) {}
                                   ?>
                                  <td><?=$TOE->result?></td>
                              </tr>
                                   <tr>
                                       <th>اجرات</th>
                                       <td><?=$row->ejraat?></td>
                                   </tr>
                                   <tr>
                                       <th>ملاحظات</th>
                                       <td><?=$row->mulahezat?></td>
                                   </tr>
                                    <tr>
                                       <th>دوسیه آرشیف</th>
                                        <?php $this->db->where('dosya_id',$row->ID_dosya_archive);
                                             $this->db->from('dosya_archive');
                                             $archive=$this->db->get()->result();
                                             foreach ($archive as $arch) {}
                                        ?>
                                       <td><?=$arch->dosya_name?></td>

                                   <tr>
                                       <th>تحریرات</th>
                                       <td><?=$row->tahrerat?></td>
                                   </tr>


                                   </tbody>
                               </table>
                           </div>
                   </div>
                   <div class="col-md-3">
                     <br/>

                     <span class="thumbnail">
                         <img src="<?php echo base_url().$row->image?>" alt="">
                     </span>
                 </div>

               </div>
           </div>

       </div>
   </div>
</div>
