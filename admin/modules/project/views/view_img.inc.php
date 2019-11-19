<div class="row">
    <div class="col-lg-8">
        <h1>จัดการAbout Us</h1>
        <h2>เเก้ไขDetail About Us</h2>
    </div>
    <div class="col-lg-4" align=right>
        <a class="button" href="?content=project&action=insert_img&project_id=<?php echo $_GET['id_project']?>">
            เพิ่มรูป
        </a>
    </div>
</div>
<table>
    <thead>
        <tr>
            <th width="12px">#</th>
            <th width="200px">Image</th>
            <th width="50px">จัดการ</th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($project_img); $i++){ ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td>
                    <img style="height:150px;width:auto;" src="../img_upload/project_img/<?php if($project_img[$i]['img'] != ""){ echo $project_img[$i]['img'];} else{ echo "default.png";} ?>"  class="img-responsive img-detail"> 
                </td>
                <td width="50px">
                    <a href="?content=project&action=update_img&id=<?php echo $project_img[$i]['img_id'];?>" style="font-size: 20px;">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a> 
                    <a href="?content=project&action=delete_img&id=<?php echo $project_img[$i]['img_id'];?>&img=<? echo $project_img[$i]['img'];d?>" onclick="return confirm('คุณต้องการลบ รูปนี้หรือไม่');" style="color:red; font-size: 20px;">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a> 

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>