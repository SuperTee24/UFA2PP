<div class="row">
    <div class="col-lg-4">
        <h1>จัดการProject Type</h1>
        <h2>เพิ่ม ลบ เเก้ไขProject Type</h2>
    </div>
    <div class="col-lg-8" align="right">

        <a title="project" href="?content=project"  <?php if($_GET['content']=='project'){ echo "class='btn btn-primary btn-menu'";}else{ echo "class='btn btn-warning btn-menu'";} ?> >โปรเจค / Project</a> 
        <a title="project_type" href="?content=project_type" <?php if($_GET['content']=='project_type'){ echo "class='btn btn-primary btn-menu'";}else{ echo "class='btn btn-warning btn-menu'";} ?> >ประเภทโปรเจค / Project Type  </a>
    </div>

</div>
<hr style="border-bottom: 100%;">
<div align=right>         
    <a class="button" href="?content=project_type&action=insert">
        เพิ่มประเภท
    </a>
</div>

<table>
    <thead>
        <tr>
            <th width="12px">#</th>
            <th width="100px">Header TH</th>
            <th width="100px">Header EN</th>
            <th width="50px">จัดการ</th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($project); $i++){ ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $project[$i]['type_name_th']; ?></td>
                <td><?php echo $project[$i]['type_name_en']; ?></td>
                <td width="50px">
                    <a href="?content=project_type&action=update&id=<?php echo $project[$i]['type_id'];?>" style="font-size: 20px;">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a> 
                    <a class="icon" href="?content=project_type&action=delete&id=<?php echo $project[$i]['type_id'];?>" onclick="return confirm('คุณต้องการลบ : <?php echo $project[$i]['type_name_th']; ?>');" style="color:red; ">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>  

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>