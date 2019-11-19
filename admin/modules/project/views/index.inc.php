<?php
date_default_timezone_set("Asia/Bangkok");

require_once('../models/ProjectModel.php');
require_once('../models/DescriptionModel.php');

$path = "modules/project/views/";

$project_model = new ProjectModel;
$description_model = new DescriptionModel;


$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("H");
$d5=date("i");
$d6=date("s");
$date="$d1$d2$d3$d4$d5$d6";

$target_dirdetail = "../img_upload/project/";
$target_dirproject = "../img_upload/about_project/";
$target_dirimg = "../img_upload/project_img/";
$target_dirheader = "../img_upload/header_project/";


if(isset($_GET['id'])){
    $detail_id = $_GET['id'];
}
if(!isset($_GET['action'])){

    $about_header = $_GET['id'];
    $description_id = '4';
    $description = $description_model->getDescriptionByID($description_id);
    $project_header_detail = $project_model->getProjectHeaderBy();
    $project_detail = $project_model->getProjectBy();
    require_once($path.'view.inc.php');
}else if ($_GET['action'] == 'view_img'){
    $project_id = $_GET['id_project'];

    $project_img = $project_model->getProjectImgByIDProject($project_id);
    require_once($path.'view_img.inc.php');
}else if ($_GET['action'] == 'insert_img'){
    require_once($path.'insert_img.inc.php');
}else if ($_GET['action'] == 'update'){
    $project_id = $_GET['id'];
    $project_type = $project_model-> getProjectTypeBy();
    $project_detail = $project_model->getProjectByID($project_id);
    require_once($path.'update.inc.php');
}else if ($_GET['action'] == 'insert'){
   $project_type = $project_model-> getProjectTypeBy();
   require_once($path.'insert.inc.php');
}else if ($_GET['action'] == 'update_img'){
    $img_id = $_GET['id'];
    $project_img = $project_model->getProjectImgByID($img_id);
    require_once($path.'update_img.inc.php');
}else if ($_GET['action'] == 'delete'){
    $project_id = $_GET['id'];
    $target_file = $target_dirimg . $_GET['img'];
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    $img = $project_model->deleteProjectByID($project_id);
    ?>  <script>
       window.history.back();
       </script> <?php
   }else if ($_GET['action'] == 'delete_img'){
    $img_id = $_GET['id'];
    $target_file = $target_dirimg . $_GET['img'];
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    $img = $project_model->deleteProjectImgeByID($img_id);
    ?>  <script>
       window.history.back();
       </script> <?php
   }else if ($_GET['action'] == 'add_img'){
    if(isset($_FILES['img'])){
        $check = true;
        $data = [];
        $data['project_id'] = $_POST['project_id'];
        if($_FILES['img']['name'] == ""){
            $data['img'] = $_POST['img'];
        }else {
            $target_file = $target_dirimg.$date.'-'.strtolower(basename($_FILES['img']['name']));
            $logoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
            if (file_exists($target_file)) {
                $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                $check = false;
            }else if ($_FILES['img']['size'] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($logoFileType != "jpg" && $logoFileType != "png" && $logoFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                $data['img'] = $date.'-'.strtolower(basename($_FILES['img']['name']));
            } else {
                $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                $check = false;
            } 
        }

        if($check == false){
            ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
        }else{
            $result = $project_model->insertProjectImage($data);
            if($result){
                ?> <script>
                    window.location="index.php?content=project&action=view_img&id_project=<? echo $_POST['project_id']?>"
                    </script> <?php
                }else{
                    ?>  <script>
                     window.history.back();
                     </script> <?php
                 }
             }
         }else{
            ?> <script> 
                window.history.back();
                </script> <?php
            }
        }else if ($_GET['action'] == 'edit_img'){

            if(isset($_FILES['project_img'])){
                $check = true;
                $data = [];
                if($_FILES['project_img']['name'] == ""){
                    $data['project_img'] = $_POST['project_img_o'];
                }else {
                    $target_file = $target_dirimg .$date.'-'.strtolower(basename($_FILES['project_img']['name']));
                    $logoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
                    if (file_exists($target_file)) {
                        $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                        $check = false;
                    }else if ($_FILES['project_img']['size'] > 5000000) {
                        $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                        $check = false;
                    }else if($logoFileType != "jpg" && $logoFileType != "png" && $logoFileType != "jpeg" ) {
                        $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                        $check = false;
                    }else if (move_uploaded_file($_FILES['project_img']['tmp_name'], $target_file)) {

                        $data['project_img'] = $date.'-'.strtolower(basename($_FILES['project_img']['name']));

                        $target_file = $target_dirimg . $_POST['project_img_o'];
                        if (file_exists($target_file)) {
                            unlink($target_file);
                        }
                    } else {
                        $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                        $check = false;
                    } 
                }

                if($check == false){
                    ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
                }else{
                    $result = $project_model->updateProjectImageByID($_POST['img_id'],$data);

                    if($result){
                        ?> <script>
                            window.location="index.php?content=project&action=view_img&id_project=<? echo $_POST['project_id']?>"
                            </script> <?php
                        }else{
                            ?>  <script>
                             window.history.back();
                             </script> <?php
                         }
                     }
                 }else{
                    ?> <script> 
                        window.history.back(); 
                        </script> <?php
                    }
                }else if ($_GET['action'] == 'add'){

                    if(isset($_POST['project_detail_year'])){
                        $check = true;
                        $data = [];
                        $data['project_detail_type'] = $_POST['project_detail_type'];
                        $data['project_detail_year'] = $_POST['project_detail_year'];
                        $data['project_detail_name_th'] = $_POST['project_detail_name_th'];
                        $data['project_detail_name_en'] = $_POST['project_detail_name_en'];
                        $data['project_detail_location_th'] = $_POST['project_detail_location_th'];
                        $data['project_detail_location_en'] = $_POST['project_detail_location_en'];
                        $data['project_detail_scope_th'] = $_POST['project_detail_scope_th'];
                        $data['project_detail_scope_en'] = $_POST['project_detail_scope_en'];

                        if($_FILES['project_detail_img']['name'] == ""){
                            $data['project_detail_img'] = $_POST['project_detail_img'];
                        }else {
                            $target_file = $target_dirdetail.$date.'-'.strtolower(basename($_FILES['project_detail_img']['name']));
                            $logoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
                            if (file_exists($target_file)) {
                                $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                                $check = false;
                            }else if ($_FILES['project_detail_img']['size'] > 5000000) {
                                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                                $check = false;
                            }else if($logoFileType != "jpg" && $logoFileType != "png" && $logoFileType != "jpeg" ) {
                                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                                $check = false;
                            }else if (move_uploaded_file($_FILES['project_detail_img']['tmp_name'], $target_file)) {
                                $data['project_detail_img'] = $date.'-'.strtolower(basename($_FILES['project_detail_img']['name']));
                            } else {
                                $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                                $check = false;
                            } 
                        }

                        if($check == false){
                            ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
                        }else{
                            $result = $project_model->insertProject($data);

                            if($result){
                                ?> <script>
                                    window.location="index.php?content=project"
                                    </script> <?php
                                }else{
                                    ?>  <script>
                                       window.history.back();
                                       </script> <?php
                                   }
                               }
                           }else{
                            ?> <script> 
                                window.history.back();
                                </script> <?php
                            }
                        }else if ($_GET['action'] == 'edit'){

                            if(isset($_POST['project_detail_year'])){
                                $check = true;
                                $data = [];
                                $data['project_detail_type'] = $_POST['project_detail_type'];
                                $data['project_detail_year'] = $_POST['project_detail_year'];
                                $data['project_detail_name_th'] = $_POST['project_detail_name_th'];
                                $data['project_detail_name_en'] = $_POST['project_detail_name_en'];
                                $data['project_detail_location_th'] = $_POST['project_detail_location_th'];
                                $data['project_detail_location_en'] = $_POST['project_detail_location_en'];
                                $data['project_detail_scope_th'] = $_POST['project_detail_scope_th'];
                                $data['project_detail_scope_en'] = $_POST['project_detail_scope_en'];

                                if($_FILES['project_detail_img']['name'] == ""){
                                    $data['project_detail_img'] = $_POST['project_detail_img_o'];
                                }else {
                                    $target_file = $target_dirdetail.$date.'-'.strtolower(basename($_FILES['project_detail_img']['name']));
                                    $logoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
                                    if (file_exists($target_file)) {
                                        $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                                        $check = false;
                                    }else if ($_FILES['project_detail_img']['size'] > 5000000) {
                                        $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                                        $check = false;
                                    }else if($logoFileType != "jpg" && $logoFileType != "png" && $logoFileType != "jpeg" ) {
                                        $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                                        $check = false;
                                    }else if (move_uploaded_file($_FILES['project_detail_img']['tmp_name'], $target_file)) {

                                        $data['project_detail_img'] = $date.'-'.strtolower(basename($_FILES['project_detail_img']['name']));

                                        $target_file = $target_dirdetail.$_POST['project_detail_img_o'];
                                        if (file_exists($target_file)) {
                                            unlink($target_file);
                                        }
                                    } else {
                                        $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                                        $check = false;
                                    } 
                                }

                                if($check == false){
                                    ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
                                }else{
                                    $result = $project_model->updateProjectByID($_POST['project_detail_id'],$data);

                    // echo($result);

                                    if($result){
                                        ?> <script>
                                            window.location="index.php?content=project"
                                            </script> <?php
                                        }else{
                                            ?>  <script>
                                               window.history.back();
                                               </script> <?php
                                           }
                                       }
                                   }else{
                                    ?> <script> 
                                        window.history.back();
                                        </script> <?php
                                    }
                                }else if ($_GET['action'] == 'edit_header'){

                                    if(isset($_POST['project_header_name_th'])){
                                        $check = true;
                                        $data = [];
                                        $data1 = [];
                                        $description_id = '4';
                                        $data1['title'] = $_POST['title'];
                                        $data1['keyword'] = $_POST['keyword'];
                                        $data1['description'] = $_POST['description'];
                                        $data['project_header_name_th'] = $_POST['project_header_name_th'];
                                        $data['project_header_name_en'] = $_POST['project_header_name_en'];
                                        $data['project_header_detail_en'] = $_POST['project_header_detail_en'];
                                        $data['project_header_detail_th'] = $_POST['project_header_detail_th'];

                                        if($_FILES['project_header_img']['name'] == ""){
                                            $data['project_header_img'] = $_POST['project_header_img_o'];
                                        }else {
                                            $target_file = $target_dirheader .$date.'-'.strtolower(basename($_FILES['project_header_img']['name']));
                                            $logoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
                                            if (file_exists($target_file)) {
                                                $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                                                $check = false;
                                            }else if ($_FILES['project_header_img']['size'] > 5000000) {
                                                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                                                $check = false;
                                            }else if($logoFileType != "jpg" && $logoFileType != "png" && $logoFileType != "jpeg" ) {
                                                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                                                $check = false;
                                            }else if (move_uploaded_file($_FILES['project_header_img']['tmp_name'], $target_file)) {

                                                $data['project_header_img'] = $date.'-'.strtolower(basename($_FILES['project_header_img']['name']));

                                                $target_file = $target_dirheader . $_POST['project_header_img_o'];
                                                if (file_exists($target_file)) {
                                                    unlink($target_file);
                                                }
                                            } else {
                                                $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                                                $check = false;
                                            } 
                                        }

                                        if($check == false){
                                            ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
                                        }else{
                                            $result = $project_model->updateProjectHeaderByID($_POST['project_header_id'],$data);
                                            $description_model->updateDescriptionByID($description_id,$data1);
                                            if($result){
                                                ?> <script>
                                                    window.location="index.php?content=project"
                                                    </script> <?php
                                                }else{
                                                    ?>  <script>
                                                     window.history.back();
                                                     </script> <?php
                                                 }
                                             }
                                         }else{
                                            ?> <script> 
                                                window.history.back(); 
                                                </script> <?php
                                            }
                                        }else if ($_GET['action'] == 'edit_detail'){

                                            if(isset($_POST['detail_title_th'])){

                                                $data = [];
                                                $data['detail_title_th'] = $_POST['detail_title_th'];
                                                $data['detail_title_en'] = $_POST['detail_title_en'];
                                                $data['detail_th'] = $_POST['detail_th'];
                                                $data['detail_en'] = $_POST['detail_en'];
                                                $result = $about_model->updateAboutDetailByID($_POST['detail_id'],$data);
                                                if($result){?>
                                                    <script>
                                                        window.location="index.php?content=about";
                                                    </script>
                                                    <?
                                                }else{
                                                    ?><script type="text/javascript">
                                                        window.location.back();    
                                                        </script><?
                                                        require_once($path.'view.inc.php');
                                                    }
                                                }
                                            }else{
                                                require_once($path.'view.inc.php');
                                            }
                                            ?>
