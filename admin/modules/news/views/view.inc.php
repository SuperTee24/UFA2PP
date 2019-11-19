    <script>

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img_back').attr('src', e.target.result);

                }
                reader.readAsDataURL(input.files[0]);
            }else{
                $('#img_back').attr('src','../img_upload/news/default.png');

            }
        }
    </script>   
    <!-- <? print_r('csadsafsa',$home_customer_detail); ?> -->

    <div class="row">
        <div class="col-lg-4">
            <h1>จัดการ News&Event</h1>
            <h2>เพิ่ม ลบ เเก้ไข News&Event</h2>
        </div>

    </div>

    <form role="form" method="post" onsubmit="return check();" action="index.php?content=news&action=edit_header" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>รูปภาพ พื้นหลัง ขนาดรูปที่แนะนำ 250*1600 px<font color=""><font></label>
                        <div>
                            <img id="img_back" src="../img_upload/news/<?php if($news_header_detail['news_header_img'] != "") echo $news_header_detail['news_header_img']; else echo "default_header.jpg"; ?>" class="img-responsive img-size" style = "height: 14vw; width: 100%;"> 
                            <input accept=".jpg , .png" type="file" id="news_header_img" name="news_header_img" class="form-control" style="margin: 14px 0 0 0 ; width: 300px;" onChange="readURL(this);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
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
                <input type="hidden" id="news_header_img_o" name="news_header_img_o" class="form-control" value="<?php echo $news_header_detail['news_header_img']?>">
                <input type="hidden" id="news_header_id" name="news_header_id" value="<?php echo $news_header_detail['news_header_id'] ?>" />
                <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
                <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            </div>

        </form>
        <hr style="border-bottom: 100%;">
        <div align=right>    
            <a class="button" href="?content=news&action=insert">
                เพิ่มข่าวสาร
            </a>             
        </div>
        <table>
            <thead>
                <tr>
                    <th width="12px">#</th>
                    <th width="5px">Image</th>
                    <th width="100px">Type TH</th>
                    <th width="100px">Type EN</th>
                    <th width="100px">Name TH</th>
                    <th width="100px">Name EN</th>
                    <th width="150px">Description TH</th>
                    <th width="150px">Description EN</th>
                    <th width="50px">จัดการ</th>
                </tr>
            </thead>
            <tbody>

                <?php for($i=0; $i < count($news_detail); $i++){ ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td>
                            <img style="height:150px;width:auto;" src="../img_upload/news/<?php if($news_detail[$i]['news_img'] != ""){ echo $news_detail[$i]['news_img'];} else{ echo "default.png";} ?>"  class="img-responsive img-detail"> 
                        </td>
                        <td><?php echo $news_detail[$i]['type_name_th']; ?></td>
                        <td><?php echo $news_detail[$i]['type_name_en']; ?></td>
                        <td><?php echo $news_detail[$i]['news_name_th']; ?></td>
                        <td><?php echo $news_detail[$i]['news_name_en']; ?></td>
                        <td><?php echo $news_detail[$i]['news_description_th']; ?></td>
                        <td><?php echo $news_detail[$i]['news_description_en']; ?></td>
                        <td width="50px">
                            <a href="?content=news&action=update&id=<?php echo $news_detail[$i]['news_id'];?>" style="font-size: 20px;">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a> 
                            <a href="?content=news&action=delete&id=<?php echo $news_detail[$i]['news_id'];?>&img=<?php echo $news_detail[$i]['news_img'];?>" onclick="return confirm('คุณต้องการลบ <?php echo $news_detail[$i]['news_name_th']; ?> ?');" style="color:red; font-size: 20px;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a> 
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>