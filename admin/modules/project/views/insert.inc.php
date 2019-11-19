

<script type="text/javascript">
	function check(){

		var project_detail_type = document.getElementById("project_detail_type").value;
		var project_detail_yearproject_detail_year = document.getElementById("project_detail_yearproject_detail_year").value;
		var project_detail_name_th = document.getElementById("project_detail_name_th").value;
		var project_detail_name_en = document.getElementById("project_detail_name_en").value;
		var project_detail_location_th = document.getElementById("project_detail_location_th").value;
		var project_detail_location_en = document.getElementById("project_detail_location_en").value;


		project_detail_type = $.trim(project_detail_type);
		project_detail_yearproject_detail_year = $.trim(project_detail_yearproject_detail_year);
		project_detail_name_th = $.trim(project_detail_name_th);
		project_detail_name_en = $.trim(project_detail_name_en);
		project_detail_location_th = $.trim(project_detail_location_th);
		project_detail_location_en = $.trim(project_detail_location_en);

		if(project_detail_type.length == 0){
			alert("กรุณาเลือก ประเภท");
			document.getElementById("project_detail_type").focus();
			return false;
		}else if(project_detail_year.length == 0){
			alert("กรุณากรอกปีที่เริ่ม");
			document.getElementById("project_detail_year").focus();
			return false;
		}else if(project_detail_name_th.length == 0){
			alert("กรุณากรอกชื่อโปรเจค TH");
			document.getElementById("project_detail_name_th").focus();
			return false;
		}else if(project_detail_name_en.length == 0){
			alert("กรุณากรอกชื่อโปรเจค EN");
			document.getElementById("project_detail_name_en").focus();
			return false;
		}else if(project_detail_location_th.length == 0){
			alert("กรุณากรอกlocation TH");
			document.getElementById("project_detail_location_th").focus();
			return false;
		}else if(project_detail_location_en.length == 0){
			alert("กรุณากรอกlocation EN");
			document.getElementById("project_detail_location_en").focus();
			return false;
		}else{
			return true;
		}
	}

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#img_back').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}else{
			$('#img_back').attr('src', '../img_upload/project/default.png');
		}
	}
</script>


<h1>Services</h1>

<hr>

<form role="form" method="post" onsubmit="return check();" action="index.php?content=project&action=add" enctype="multipart/form-data">
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>รูปภาพ Project <font color="#F00"></font></label>
				<div>
					<img id="img_back" src="../img_upload/project/default.png" class="img-responsive img-size"  style = "height: 300px; width: 500px;"> 
					<input accept=".jpg , .png" type="file" id="project_detail_img" name="project_detail_img" class="form-control" style="margin: 14px 0 0 0 ; width: 300px;" onChange="readURL(this);">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="form-group">
				<label>ประเภท / Type. <font color="#F00"><b>*</b></font></label>
				<select id="project_detail_type" name="project_detail_type" class="form-control" data-live-search="true" >
					<?php
					for ($i = 0; $i < count($project_type); $i++) {
						?>
						<option value="<?php echo $project_type[$i]['type_id'] ?>" <? if($i == 0) echo "selected";?>><?php echo $project_type[$i]['type_name_th'] ?></option>
						<?
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Year Completed<font color="#F00"><b>*</b></font></label>
				<input id="project_detail_year" name="project_detail_year" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Project name TH<font color="#F00"><b>*</b></font></label>
				<input id="project_detail_name_th" name="project_detail_name_th" class="form-control">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Project name EN<font color="#F00"><b>*</b></font></label>
				<input id="project_detail_name_en" name="project_detail_name_en" class="form-control">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Location TH<font color="#F00"><b>*</b></font></label>
				<input id="project_detail_location_th" name="project_detail_location_th" class="form-control">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Location EN<font color="#F00"><b>*</b></font></label>
				<input id="project_detail_location_en" name="project_detail_location_en" class="form-control">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Scope of work TH<font color="#F00"><b>*</b></font></label>
				<textarea style="width:100%;" rows="8" name="project_detail_scope_th" id="project_detail_scope_th" class="ckeditor"></textarea>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Scope of work EN<font color="#F00"><b>*</b></font></label>
				<textarea style="width:100%;" rows="8"  name="project_detail_scope_en" id="project_detail_scope_en" class="ckeditor"></textarea>
			</div>
		</div>
	</div>
	<div align="right">
		<button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
		<button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
	</div>

</form>