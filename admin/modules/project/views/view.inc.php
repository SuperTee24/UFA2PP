    <script>
        function check(){

            var project_header_name_th = document.getElementById("project_header_name_th").value;
            var project_header_name_en = document.getElementById("project_header_name_en").value;
            var project_header_detail_th = document.getElementById("project_header_detail_th").value;
            var project_header_detail_en = document.getElementById("project_header_detail_en").value;
            var project_detail_location_th = document.getElementById("project_detail_location_th").value;
            var project_detail_location_en = document.getElementById("project_detail_location_en").value;


            project_header_name_th = $.trim(project_header_name_th);
            project_header_name_en = $.trim(project_header_name_en);
            project_header_detail_th = $.trim(project_header_detail_th);
            project_header_detail_en = $.trim(project_header_detail_en);
            project_detail_location_th = $.trim(project_detail_location_th);
            project_detail_location_en = $.trim(project_detail_location_en);

            if(project_header_name_th.length == 0){
                alert("กรุณากรอก Header TH");
                document.getElementById("project_header_name_th").focus();
                return false;
            }else if(project_header_name_en.length == 0){
                alert("กรุณากรอก Header EN");
                document.getElementById("project_header_name_en").focus();
                return false;
            }else if(project_header_detail_th.length == 0){
                alert("กรุณากรอก Detail TH");
                document.getElementById("project_header_detail_th").focus();
                return false;
            }else if(project_header_detail_en.length == 0){
                alert("กรุณากรอก Detail EN");
                document.getElementById("project_header_detail_en").focus();
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
                $('#img_back').attr('src', '../img_upload/header_project/default.png');

            }
        }
    </script>   

    <div class="row">
        <div class="col-lg-4">
            <h1>จัดการ Project</h1>
            <h2>เพิ่ม ลบ เเก้ไข Project</h2>
        </div>
        <div class="col-lg-8" align="right">

            <a title="project" href="?content=project"  <?php if($_GET['content']=='project'){ echo "class='btn btn-primary btn-menu'";}else{ echo "class='btn btn-warning btn-menu'";} ?> >โปรเจค / Project</a> 
            <a title="project_type" href="?content=project_type" <?php if($_GET['content']=='project_type'){ echo "class='btn btn-primary btn-menu'";}else{ echo "class='btn btn-warning btn-menu'";} ?> >ประเภทโปรเจค / Project Type  </a>

        </div>

    </div>

    <form role="form" method="post" onsubmit="return check();" action="index.php?content=project&action=edit_header" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>รูปภาพ พื้นหลัง ขนาดรูปที่แนะนำ 250*1600 px<font color=""><font></label>
                        <div>
                            <img id="img_back" src="../img_upload/header_project/<?php if($project_header_detail['project_header_img'] != "") echo $project_header_detail['project_header_img']; else echo "default.png"; ?>" class="img-responsive img-size" style = "height: 14vw; width: 100%;"> 
                            <input accept=".jpg , .png" type="file" id="project_header_img" name="project_header_img" class="form-control" style="margin: 14px 0 0 0 ; width: 300px;" onChange="readURL(this);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Header TH <font ><bcolor="">*</b></font></label>
                        <input id="project_header_name_th" name="project_header_name_th" class="form-control"  value="<?php echo $project_header_detail['project_header_name_th']?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Header EN <font color=""><b>*</b></font></label>
                        <input id="project_header_name_en" name="project_header_name_en" class="form-control"  value="<?php echo $project_header_detail['project_header_name_en']?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Detail TH<font color="#F00"><b>*</b></font></label>
                        <textarea id="project_header_detail_th" name="project_header_detail_th" class="form-control" style="min-height: 200px;"><?php echo $project_header_detail['project_header_detail_th']?></textarea>
                    </div>
                </div>        <div class="col-lg-6">
                    <div class="form-group">
                        <label>Detail EN<font color="#F00"><b>*</b></font></label>
                        <textarea id="project_header_detail_en" name="project_header_detail_en" class="form-control" style="min-height: 200px;"><?php echo $project_header_detail['project_header_detail_en']?></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>title<font color=""><b>*</b></font></label>
                        <input id="title" name="title" class="form-control"  value="<?php echo $description['title']?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>keyword<font color=""><b>*</b></font></label>
                        <input id="keyword" name="keyword" class="form-control"  value="<?php echo $description['keyword']?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>description<font color=""><b>*</b></font></label>
                        <input id="description" name="description" class="form-control"  value="<?php echo $description['description']?>">
                    </div>
                </div>
            </div>

            <div align="right">
                <input type="hidden" id="project_header_img_o" name="project_header_img_o" class="form-control" value="<?php echo $project_header_detail['project_header_img']?>">
                <input type="hidden" id="project_header_id" name="project_header_id" value="<?php echo $project_header_detail['project_header_id'] ?>" />
                <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
                <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            </div>
        </form>
        <hr style="border-bottom: 100%;">
        <div align=right>    
            <a class="button" href="?content=project&action=insert">
                เพิ่มโปรเจค
            </a>             
        </div>
        <table>
            <thead>
                <tr>
                    <th width="12px">#</th>
                    <th width="50px">Image</th>
                    <th width="100px">Type TH</th>
                    <th width="100px">Type EN</th>
                    <th width="200px">Project name TH</th>
                    <th width="200px">Project name EN</th>
                    <th width="150px">Location TH</th>
                    <th width="150px">Location EN</th>
                    <th width="50px">รูปภาพเพิ่มเติม</th>
                    <th width="50px">จัดการ</th>
                </tr>
            </thead>
            <tbody>

                <?php for($i=0; $i < count($project_detail); $i++){ ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td>
                            <img style="height:150px;width:auto;" src="../img_upload/project/<?php if($project_detail[$i]['project_detail_img'] != ""){ echo $project_detail[$i]['project_detail_img'];} else{ echo "default.png";} ?>"  class="img-responsive img-detail"> 
                        </td>
                        <td><?php echo $project_detail[$i]['type_name_th']; ?></td>
                        <td><?php echo $project_detail[$i]['type_name_en']; ?></td>
                        <td><?php echo $project_detail[$i]['project_detail_name_th']; ?></td>
                        <td><?php echo $project_detail[$i]['project_detail_name_en']; ?></td>
                        <td><?php echo $project_detail[$i]['project_detail_location_th']; ?></td>
                        <td><?php echo $project_detail[$i]['project_detail_location_en']; ?></td>
                        <td width="50px">
                            <a href="?content=project&action=view_img&id_project=<?php echo $project_detail[$i]['project_detail_id'];?>" style="font-size: 20px;">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </a> 

                        </td>
                        <td width="50px">
                            <a href="?content=project&action=update&id=<?php echo $project_detail[$i]['project_detail_id'];?>" style="font-size: 20px;">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a> 
                            <a href="?content=project&action=delete&id=<?php echo $project_detail[$i]['project_detail_id'];?>&img=<? echo $project_detail[$i]['project_detail_img'];?>" onclick="return confirm('คุณต้องการลบ โปรเจคนี้หรือไม่');" style="color:red; font-size: 20px;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a> 

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>