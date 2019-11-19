 <script type="text/javascript" src="../template/backend/ckeditor/ckeditor.js"></script>
 <script>
   function check(){
    var type_name_th = document.getElementById("type_name_th").value;
    var type_name_en = document.getElementById("type_name_en").value;

    type_name_th = $.trim(type_name_th);
    type_name_en = $.trim(type_name_en);

    if(type_name_th.length == 0){
     alert("กรุณากรอก Projcet type TH");
     document.getElementById("type_name_th").focus();
     return false;
   }else if(type_name_en.length == 0){
     alert("กรุณากรอก Projcet type EN");
     document.getElementById("type_name_en").focus();
     return false;
   }else{
     return true;
   }
 }
</script>

<h1>เพิ่มService</h1>
<div align="right">

</div>

<form role="form" method="post" onsubmit="return check();" action="index.php?content=project_type&action=add" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-3">
      <div class="form-group">
        <label>Project type TH<font color="#F00"><b>*</b></font></label>
        <input id="type_name_th" name="type_name_th" class="form-control" maxlength="150">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
        <label>Project type EN<font color="#F00"><b>*</b></font></label>
        <input id="type_name_en" name="type_name_en" class="form-control" maxlength="150">
      </div>
    </div>
  </div>
  <div align="right">
    <button type="button" class="btn btn-default" onclick="window.location='?content=project_type';" >ย้อนกลับ</button>
    <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
  </div>
</form>
