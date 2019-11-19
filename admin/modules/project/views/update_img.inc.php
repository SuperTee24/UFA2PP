<script>
    function check(){

    }

    function readURL(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function(e) {
            $('#img_project').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }else{
       $('#img_project').attr('src', '../img_upload/project_img/default.png');
   }
}
</script>

<h1>แก้ไขรูป Project</h1>
<div align="right">

</div>

<form role="form" method="post" onsubmit="return check();" action="index.php?content=project&action=edit_img" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label>รูปภาพ <font color="#F00"></font></label>
                <div>
                    <img id="img_project" src="../img_upload/project_img/<?php if($project_img['img'] != "") echo $project_img['img']; else echo "default.png"; ?>" class="img-responsive img-size"> 
                    <input accept=".jpg , .png" type="file" id="project_img" name="project_img" class="form-control" style="margin: 14px 0 0 0 ;" onChange="readURL(this);">
                </div>
            </div>
        </div>
    </div>
    <div align="right">
        <input type="hidden" id="project_img_o" name="project_img_o" class="form-control" value="<?php echo $project_img['img']?>">
        <input type="hidden" id="img_id" name="img_id" value="<?php echo $project_img['img_id'] ?>" />
        <input type="hidden" id="project_id" name="project_id" value="<?php echo $project_img['project_id'] ?>" />
        <button type="button" class="btn btn-default" onclick="window.history.back();">ย้อนกลับ</button>
        <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
    </div>
</form>