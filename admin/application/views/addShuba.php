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
                    <a href="<?=base_url()?>index.php/shuabatController/index">شعبات</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه کردن شعبه</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه کردن  شعبه</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-green green-meadow" href="<?=base_url()?>index.php/shuabatController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="post" action="<?=base_url()?>index.php/shuabatController/checkAddShuba" enctype="multipart/form-data">
                    <div class="form-body">
                    <div class="row">
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_shuba_id)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold;">شماره شعبه*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shuba_id" value="<?php if (!empty($Field_data['recordNumber'])) echo $Field_data['recordNumber']; ?>" placeholder="">
                                <div class="form-control-focus"></div>
                                <?php if(!empty($error_shuba_id)){?>
                                <span class="help-block-error" style="color:red;"><?=$error_shuba_id?></span>
                                <?php }?>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_shuba_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">شعبه مربوطه*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shuba_name" value="<?php if (!empty($Field_data['edition'])) echo $Field_data['edition']; ?>" placeholder="">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_shuba_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_shuaba_name?></span>
                                <?php }?>
                            </div>
                        </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/shuabatController/index" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="addShuba" class="btn btn-circle green-meadow" value="ذخیره"/>
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
            url: "<?=base_url();?>index.php/shuabatController/getDepartments",
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
