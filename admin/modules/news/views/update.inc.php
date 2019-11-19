

<script type="text/javascript">
	function check(){

		var type_id = document.getElementById("type_id").value;
		var news_name_th = document.getElementById("news_name_th").value;
		var news_name_en = document.getElementById("news_name_en").value;


		type_id = $.trim(type_id);
		news_name_en = $.trim(news_name_en);
		news_name_th = $.trim(news_name_th);

		if(type_id.length == 0){
			alert("กรุณาเลือก ประเภท");
			document.getElementById("type_id").focus();
			return false;
		}else if(news_name_th.length == 0){
			alert("กรุณากรอกชื่อ TH");
			document.getElementById("news_name_th").focus();
			return false;
		}else if(news_name_en.length == 0){
			alert("กรุณากรอกชื่อ EN");
			document.getElementById("news_name_en").focus();
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
			$('#img_back').attr('src', '../img_upload/news/default.png');
		}
	}
</script>


<h1>Services</h1>

<hr>

<form role="form" method="post" onsubmit="return check();" action="index.php?content=news&action=edit" enctype="multipart/form-data">
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>รูปภาพ Project <font color="#F00"></font></label>
				<div>
					<img id="img_back" src="../img_upload/news/<?php if($news_detail['news_img'] != "") echo $news_detail['news_img']; else echo "default.png"; ?>" class="img-responsive img-size"  style = "height: 300px; width: 500px;"> 
					<input accept=".jpg , .png" type="file" id="news_img" name="news_img" class="form-control" style="margin: 14px 0 0 0 ; width: 300px;" onChange="readURL(this);">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="form-group">
				<label>ประเภท / Type. <font color="#F00"><b>*</b></font></label>
				<select id="type_id" name="type_id" class="form-control" data-live-search="true" >
					<?php
					for ($i = 0; $i < count($news_type); $i++) {
						?>
						<option value="<?php echo $news_type[$i]['type_id'] ?>" <? if($news_type[$i]['type_id'] == $news_detail['type_id']) echo "selected";?>><?php echo $news_type[$i]['type_name_th'] ?></option>
						<?
					}
					?>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Name TH<font color="#F00"><b>*</b></font></label>
				<input id="news_name_th" name="news_name_th" class="form-control" value="<? echo $news_detail['news_name_th']?>">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Name EN<font color="#F00"><b>*</b></font></label>
				<input id="news_name_en" name="news_name_en" class="form-control" value="<? echo $news_detail['news_name_en']?>">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Description TH<font color="#F00"><b>*</b></font></label>
				<textarea style="width:100%;" rows="5" name="news_description_th" id="news_description_th" class="ckeditor"><? echo $news_detail['news_description_th']?></textarea>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Description EN<font color="#F00"><b>*</b></font></label>
				<textarea style="width:100%;" rows="5" name="news_description_en" id="news_description_en" class="ckeditor"><? echo $news_detail['news_description_en']?></textarea>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Detail TH<font color="#F00"><b>*</b></font></label>
				<textarea style="width:100%;" rows="8" name="news_detail_th" id="news_detail_th" class="ckeditor"><? echo $news_detail['news_detail_th']?></textarea>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Detail EN<font color="#F00"><b>*</b></font></label>
				<textarea style="width:100%;" rows="8"  name="news_detail_en" id="news_detail_en" class="ckeditor"><? echo $news_detail['news_detail_en']?></textarea>
			</div>
		</div>
	</div>
	<div align="right">
		<input type="hidden" id="news_img_o" name="news_img_o" class="form-control" value="<?php echo $news_detail['news_img']?>">
		<input type="hidden" id="news_id" name="news_id" value="<?php echo $news_detail['news_id'] ?>" />
		<button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
		<button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
	</div>

</form>