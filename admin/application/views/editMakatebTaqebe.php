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
                    <a href="<?=base_url()?>index.php/makatebController/index">مکاتیب</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه کردن مکتوب</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه کردن   مکاتیب</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-green green-meadow" href="<?=base_url()?>index.php/taqebiController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            <?php foreach($makateb as $maktob){} ?>
                              <form class="form-horizontal" method="post" action="<?=base_url()?>index.php/taqebiController/checkEditMakateb" enctype="multipart/form-data">
                    <div class="form-body">
                    <div class="row">
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_shomaraiMaktob)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold;">شماره  مکتوب*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shomaraiMaktob" value="<?=$maktob->shumara_maktob?>" placeholder="">
                                <div class="form-control-focus"></div>
                                <?php if(!empty($error_shomaraiMaktob)){?>
                                <span class="help-block-error" style="color:red;"><?=$error_shomaraiMaktob?></span>
                                <?php }?>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_date)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ ثبت*</label>
                            <div class="col-md-9">
                                <input type="date" style="text-align: right;" class="form-control" name="date" value="<?=$maktob->date?>" placeholder="۱۳۹۸/۳/۲">
                                <div class="form-control-focus"></div>
                                <?php if(!empty($error_date)){?>
                                <span class="help-block-error" style="color:red;"><?=$error_date?></span>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                                     <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_shuba)) echo 'has-error' ?>">
                                                 <label class="col-md-3 control-label" style="font-weight: bold">شعبه مربوطه*</label>
                                                     <div class="col-md-9">
                                                       <select class="form-control" name="shuba" >
                                                        <?php $this->db->where('shuba_id',$maktob->ID_nawyat_maktob); $this->db->from('shuabat');
                                                       $shuba=$this->db->get()->result();
                                                       foreach($shuba as $shubat){ ?>
                                                       <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == 0) echo ' selected '?> value="<?=$subat->shuba_id?>"><?=$subat->shuba_name?></option>
                                                     <?php }?>
                                                       <?php $this->db->from('shuabat');
                                                             $data=$this->db->get()->result();
                                                             foreach ($data as $row) {
                                                        ?>
                                                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="<?=$row->shuba_id?>"><?=$row->shuba_name?></option>
                                                          <?php }?>
                                              </select>
                                              <div class="form-control-focus"> </div>
                                             <?php if(!empty($error_shuba)){?>
                                               <span class="help-block-error" style="color:red;"><?=$error_shuba?></span>
                                             <?php }?>
                                          </div>
                                      </div>
                         
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_mursal)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">مرسل*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="mursal" value="<?=$maktob->mursal?>" placeholder="">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_mursal)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_mursal?></span>
                                <?php }?>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_typeOfMaktob)) echo 'has-error' ?>">
                        <label class="col-md-3 control-label" style="font-weight: bold">نوعیت مکتوب*</label>
                         <div class="col-md-9">
                       <select class="form-control" name="typeOfMaktob" >
                        <?php $this->db->where('ID',$maktob->ID_nawyat_maktob);
                        $this->db->from('nawyat_maktob');
                        $TM=$this->db->get()->result(); foreach($TM as $type){ ?>
                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == 0) echo ' selected '?> value="<?=$type->ID?>"><?=$type->nawyat?></option>
                      <?php }?>
                        <?php $this->db->from('nawyat_maktob');
                              $data=$this->db->get()->result();
                              foreach ($data as $row) {
                         ?>
                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="<?=$row->ID?>"><?=$row->nawyat?></option>
                  <?php }?>
              </select>
              <div class="form-control-focus"> </div>
              <?php if(!empty($error_typeOfMaktob)){?>
                  <span class="help-block-error" style="color:red;"><?=$error_typeOfMaktob?></span>
              <?php }?>
          </div>
      </div>
                  
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_mursalAlai)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">مرسل الیه*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="mursalAlai" value="<?=$maktob->mursal_elai?>" placeholder="">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_mursalAlai)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_mursalAlai?></span>
                                <?php }?>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_saderaNumber)) echo 'has-error' ?>">
                             <label class="col-md-3 control-label" style="font-weight: bold">نمبر صادره*</label>
                             <div class="col-md-9">
                                <input type="text" class="form-control" name="saderaNumber" value="<?=$maktob->sadra_number?>" placeholder="">
                                 <div class="form-control-focus"> </div>
                                 <?php if(!empty($error_saderaNumber)){?>
                                     <span class="help-block-error" style="color:red;"><?=$error_saderaNumber?></span>
                                 <?php }?>
                             </div>
                         </div>
                           
                                      <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_mulahezat)) echo 'has-error' ?>">
                                            <label class="col-md-3 control-label" style="font-weight: bold;">ملاحظات*</label>
                                                <div class="col-md-9">
                                                        <input type="text" class="form-control" name="mulahezat" value="<?=$maktob->mulahezat?>" placeholder="">
                                                        <div class="form-control-focus"></div>
                                                        <?php if(!empty($error_mulahezat)){?>
                                                        <span class="help-block-error" style="color:red;"><?=$error_mulahezat?></span>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                 <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_waredaNumber)) echo 'has-error' ?>">
                                                     <label class="col-md-3 control-label" style="font-weight: bold">نمبر وارده*</label>
                                                     <div class="col-md-9">
                                                           <input type="text" class="form-control" name="waredaNumber" value="<?=$maktob->warda_number?>" placeholder="">
                                                         <div class="form-control-focus"> </div>
                                                         <?php if(!empty($error_waredaNumber)){?>
                                                             <span class="help-block-error" style="color:red;"><?=$error_waredaNumber?></span>
                                                         <?php }?>
                                                     </div>
                                                 </div>
                                               
                                                   <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_khulasMatlab)) echo 'has-error' ?>">
                                                       <label class="col-md-3 control-label" style="font-weight: bold;">خلص مطلب*</label>
                                                       <div class="col-md-9">
                                                           <input type="text" class="form-control" name="khulasMatlab" value="<?=$maktob->khulas_matlab?>" placeholder="">
                                                           <div class="form-control-focus"></div>
                                                           <?php if(!empty($error_khulasMatlab)){?>
                                                           <span class="help-block-error" style="color:red;"><?=$error_khulasMatlab?></span>
                                                           <?php }?>
                                                       </div>
                                                   </div>
                                                   </div>
                                                   <div class="row">
                                                    <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_qaidWareda)) echo 'has-error' ?>">
                                                        <label class="col-md-3 control-label" style="font-weight: bold">قید وارده*</label>
                                                        <div class="col-md-9">
                                                              <input type="text" class="form-control" name="qaidWareda" value="<?=$maktob->qaid_warda?>" placeholder="">
                                                            <div class="form-control-focus"> </div>
                                                            <?php if(!empty($error_qaidWareda)){?>
                                                                <span class="help-block-error" style="color:red;"><?=$error_qaidWareda?></span>
                                                            <?php }?>
                                                        </div>
                                                    </div>

                    
                      <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_bakhsheTahrerat)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تحریرات*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bakhsheTahrerat" value="<?=$maktob->tahrerat?>" placeholder="">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_bakhsheTahrerat)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_bakhsheTahrerat?></span>
                                <?php }?>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_dosyaArchive)) echo 'has-error' ?>">
                                                  <label class="col-md-3 control-label" style="font-weight: bold">دوسیه آرشیف*</label>
                                                      <div class="col-md-9">
                                                        <select class="form-control" name="dosyaArchive" >
                                                          <?php $this->db->where('dosya_id',$maktob->ID_dosya_archive); $this->db->from('dosya_archive'); $dosya=$this->db->get()->result(); foreach($dosya as $dos){ ?>
                                                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == 0) echo ' selected '?> value="<?=$dos->dosya_id?>"><?=$dos->dosya_name?></option>
                                                      <?php }?>
                                                        <?php $this->db->from('dosya_archive');
                                                              $data=$this->db->get()->result();
                                                              foreach ($data as $row) {
                                                         ?>
                                                         <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="<?=$row->dosya_id?>"><?=$row->dosya_name?></option>
                                                           <?php }?>
                                               </select>
                                               <div class="form-control-focus"> </div>
                                              <?php if(!empty($error_dosyaArchive)){?>
                                                <span class="help-block-error" style="color:red;"><?=$error_dosyaArchive?></span>
                                              <?php }?>
                                           </div>
                                       </div>
                                   
                                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_typeOfEjraat)) echo 'has-error' ?>">
                                           <label class="col-md-3 control-label" style="font-weight: bold">نتیجه اجرات*</label>
                                           <div class="col-md-9">
                                             <select class="form-control" name="typeOfEjraat" >
                                               
                                                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == 0) echo ' selected '?> value="<?=$dos->dosya_id?>"><?php if($maktob->ID_ejraat_result==1){ echo "اجرا شده";} elseif($maktob->ID_ejraat_result==2) {echo "تحت کار";} elseif($maktob->ID_ejraat_result==3){ echo "اجرا نشده"; } ?></option>
                                                      
                                               <?php $this->db->from('ejraat_result');
                                               $data=$this->db->get()->result();
                                               foreach ($data as $row) {
                                                 ?>
                                                 <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="<?=$row->ejraat_id?>"><?=$row->result?></option>
                                               <?php }?>
                                             </select>
                                             <div class="form-control-focus"> </div>
                                             <?php if(!empty($error_typeOfEjraat)){?>
                                               <span class="help-block-error" style="color:red;"><?=$error_typeOfEjraat?></span>
                                             <?php }?>
                                           </div>
                                         </div>
                                      </div>
                                      <input type="hidden" name="id" value="<?=$maktob->shumara_maktob?>">
                                      <div class="row">
                                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_price)) echo 'has-error' ?>">
                                                  <label class="col-md-3 control-label" style="font-weight: bold">عکس *</label>
                                                  <div class="col-md-9">
                                                      <input type="file" class="form-control" name="photo" value="<?php if (!empty($Field_data['price'])) echo $Field_data['price']; ?>" placeholder="۵۰۰">
                                                     <div class="form-control-focus"> </div>
                                             <?php if(!empty($error_photo)){?>
                                               <span class="help-block-error" style="color:red;"><?=$error_photo?></span>
                                             <?php }?>
                                                  </div>
                                              </div>
                                              </div>
                                              <div class="row">
                                          <div class="form-actions">
                                            <div class="row">
                                              <div class="col-md-offset-2 col-md-10">
                                                <a href="<?=base_url()?>index.php/makatebController/index" class="btn btn-circle yellow-gold">لغو</a>
                                                <input type="submit" name="addMaktob" class="btn btn-circle green-meadow" value="ذخیره"/>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        </form>
                                      </div><!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <script type="text/javascript">
                            var url="<?php echo base_url(); ?>";
                            function delete_record(id){
                              var r=confirm("آیا میخواهد که این ریکارد را حذف کنید؟")
                              if(r==true)
                              window.location=url+"index.php/makatebController/deletemakateb?id="+id;
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
                       <h4 class="modal-title" style="color:<?php if(isset($Type) && $Type == 'success')echo '#000000';else echo 'red';?>;font-weight: bold"><?php if(isset($Type) && $Type == 'success') echo 'موفقانه!';elseif(isset($Type) && $Type =='failed') echo 'متاسفانه!'?></h4>
                   </div>
                   <div class="modal-body">
                       <p style="color:<?php if(isset($Type) && $Type == 'success')echo 'green';else echo 'red';?>;font-size: 20px"><?=$Message?></p>
                   </div>
                   <div class="modal-footer">
                       <a href="<?php echo base_url()?>index.php/makatebController/index" class="btn btn-circle green-meadow">بستن</a>
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
