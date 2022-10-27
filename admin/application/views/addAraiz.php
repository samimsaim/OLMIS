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
                    <a href="<?=base_url()?>index.php/araizController/index">عرایض</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه کردن عریضه</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه کردن  عریضه</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-green green-meadow" href="<?=base_url()?>index.php/araizController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="post" action="<?=base_url()?>index.php/araizController/checkAddAraiz" enctype="multipart/form-data">
                    <div class="form-body">
                    <div class="row">
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_shomaraiAreza)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold;">شماره عریضه*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shomaraiAreza" value="<?php if (!empty($Field_data['recordNumber'])) echo $Field_data['recordNumber']; ?>" placeholder="">
                                <div class="form-control-focus"></div>
                                <?php if(!empty($error_shomaraiAreza)){?>
                                <span class="help-block-error" style="color:red;"><?=$error_shomaraiAreza?></span>
                                <?php }?>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_date)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ ثبت*</label>
                            <div class="col-md-9">
                                <input type="text"  id="usage" style="text-align: right;" class="form-control" name="date" value="<?php if (!empty($Field_data['date'])) echo $Field_data['date']; ?>" placeholder="۱۳۹۸/۳/۲">
                                <div class="form-control-focus"></div>
                                <?php if(!empty($error_date)){?>
                                <span class="help-block-error" style="color:red;"><?=$error_date?></span>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_typeOfMaktob)) echo 'has-error' ?>">
                                                <label class="col-md-3 control-label" style="font-weight: bold">شماره مکتوب*</label>
                                                    <div class="col-md-9">
                                                      <select class="form-control" name="maktobNumber" >
                                                      <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == 0) echo ' selected '?> value="0">شماره مکتوب</option>
                                                      <?php $this->db->from('makateb');
                                                            $data=$this->db->get()->result();
                                                            foreach ($data as $row) {
                                                       ?>
                                                       <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="<?=$row->shumara_maktob?>"><?=$row->shumara_maktob?></option>
                                                         <?php }?>
                                             </select>
                                             <div class="form-control-focus"> </div>
                                            <?php if(!empty($error_typeOfMaktob)){?>
                                              <span class="help-block-error" style="color:red;"><?=$error_typeOfMaktob?></span>
                                            <?php }?>
                                         </div>
                                     </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_mursal)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">مرسل*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="mursal" value="<?php if (!empty($Field_data['edition'])) echo $Field_data['edition']; ?>" placeholder="">
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
                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == 0) echo ' selected '?> value="0">صادره/وارده/تعقیبی</option>
                        
                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="1">صادره</option>
                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="2">وارده</option>
                        <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="3">تعقیبی</option>
                  
              </select>

          </div>
      </div>

   
      <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_record_number)) echo 'has-error' ?>">
      <label class="col-md-3 control-label" style="font-weight: bold;">مرسل الیه*</label>
       <div class="col-md-9">
      <input type="text" class="form-control" name="mursalAlai" value="<?php if (!empty($Field_data['recordNumber'])) echo $Field_data['recordNumber']; ?>" placeholder="">
        <div class="form-control-focus"></div>
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
                                <input type="text" class="form-control" name="saderaNumber" value="<?php if (!empty($Field_data['valuemNumber'])) echo $Field_data['valuemNumber']; ?>" placeholder="">
                                 <div class="form-control-focus"> </div>
                                 <?php if(!empty($error_saderaNumber)){?>
                                     <span class="help-block-error" style="color:red;"><?=$error_saderaNumber?></span>
                                 <?php }?>
                             </div>
                         </div>

     
          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_dosyaArchive)) echo 'has-error' ?>">
                                    <label class="col-md-3 control-label" style="font-weight: bold">دوسیه آرشیف*</label>
                                        <div class="col-md-9">
                                          <select class="form-control" name="dosyaArchive" >
                                          <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == 0) echo ' selected '?> value="0">دوسیه آرشیف</option>
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
                         </div>
                    <div class="row">
                    <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_khulasMatlab)) echo 'has-error' ?>">
                       <label class="col-md-3 control-label" style="font-weight: bold;">خلص مطلب*</label>
                            <div class="col-md-9">
                                 <input type="text" class="form-control" name="khulasMatlab" value="<?php if (!empty($Field_data['recordNumber'])) echo $Field_data['recordNumber']; ?>" placeholder="">
                                    <div class="form-control-focus"></div>
                                         <?php if(!empty($error_khulasMatlab)){?>
                                           <span class="help-block-error" style="color:red;"><?=$error_khulasMatlab?></span>
                                             <?php }?>
                                               </div>
                                               </div>

                                              
                                               <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_typeOfEjraat)) echo 'has-error' ?>">
                                               <label class="col-md-3 control-label" style="font-weight: bold">نتیجه اجرات</label>
                                                <div class="col-md-9">
                                              <select class="form-control" name="typeOfEjraat" >
                                               <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == 0) echo ' selected '?> value="0"></option>
                                              
                                               <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="1">اجرا شده</option>
                                               <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="2">تحت کار</option>
                                               <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="3">تعقیبی</option>
                                               <option <?php if(!empty($Field_data['publisher']) && $Field_data['publisher'] == $tran->translator_id) echo ' selected '?> value="3">اجرا نشده</option>
                                       
                                     </select>
                                     <div class="form-control-focus"> </div>
                                     <?php if(!empty($error_typeOfEjraat)){?>
                                         <span class="help-block-error" style="color:red;"><?=$error_typeOfEjraat?></span>
                                     <?php }?>
                                  </div>
                                  </div>
                                  </div>


        <div class="row">
       
                           <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_bakhsheTahrerat)) echo 'has-error' ?>">
                              <label class="col-md-3 control-label" style="font-weight: bold">بخش تحریرات*</label>
                             <div class="col-md-9">
                              <input type="text" class="form-control" name="bakhsheTahrerat" value="<?php if (!empty($Field_data['price'])) echo $Field_data['price']; ?>" placeholder="">
                      <div class="form-control-focus"> </div>
                       <?php if(!empty($error_bakhsheTahrerat)){?>
                       <span class="help-block-error" style="color:red;"><?=$error_bakhsheTahrerat?></span>
                        <?php }?>
                          </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_mulahezat)) echo 'has-error' ?>">
            <label class="col-md-3 control-label" style="font-weight: bold;">ملاحظات*</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="mulahezat" value="<?php if (!empty($Field_data['recordNumber'])) echo $Field_data['recordNumber']; ?>" placeholder="">
                        <div class="form-control-focus"></div>
                              <?php if(!empty($error_mulahezat)){?>
                                 <span class="help-block-error" style="color:red;"><?=$error_mulahezat?></span>
                              <?php }?>
                               </div>
                                 </div>
                        </div>

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
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/araizController/index" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="addAraiz" class="btn btn-circle green-meadow" value="ذخیره"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>assets/global/plugins/angularjs/angular.min.js"></script>

<script>
    function getDepartment(){
        var facId = $("#fac").val();
        var department = document.getElementById("dep");
        $(department).empty();
        $(department).append('<option selected value='+0+'></option>');
        $.ajax({
            type: "POST",
            url: "<?=base_url();?>index.php/araizController/getDepartments",
            data: {facId:facId},
            dataType: "JSON",
            success: function(data) {
                for(var i = 0; i < data.length; i++){
                    $(department).append('<option value='+data[i]['department_id']+'>'+data[i]['department_name']+'</option>');
                }
            },
            error: function(err) {
            }
        });
    }
</script>
