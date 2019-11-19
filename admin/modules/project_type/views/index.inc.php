<?php
date_default_timezone_set("Asia/Bangkok");

require_once('../models/ProjectModel.php');

$path = "modules/project_type/views/";

$project_model = new ProjectModel;

$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("H");
$d5=date("i");
$d6=date("s");
$date="$d1$d2$d3$d4$d5$d6";

if(isset($_GET['id'])){
    $detail_id = $_GET['id'];
}

if( !isset( $_GET['action'] ) ){

    $project = $project_model->getProjectTypeBy();
    require_once($path.'view.inc.php');
}else if ($_GET['action'] == 'update'){

    $project_id = $_GET['id'];
    $project = $project_model->getProjectTypeByID($project_id);
    require_once($path.'update.inc.php');
}else if ($_GET['action'] == 'insert'){

   require_once($path.'insert.inc.php');
}else if ($_GET['action'] == 'update_img'){

    $about_img_id = $_GET['id'];
    require_once($path.'update_img.inc.php');
}else if ($_GET['action'] == 'delete'){

    $project_id = $_GET['id'];
    $project = $project_model->deleteProjectTypeByID($project_id);
    ?>  <script>
     window.history.back();
     </script> <?php
 }else if ($_GET['action'] == 'add'){

    if(isset($_POST['type_name_th'])){
        $data = [];
        $data['type_name_th'] = $_POST['type_name_th'];
        $data['type_name_en'] = $_POST['type_name_en'];

        $result = $project_model->insertProjectType($data);
        if($result){?>
            <script>
                window.location="index.php?content=project_type";
            </script>
            <?
        }else{
            ?><script type="text/javascript">
                window.location.back();    
                </script><?
                require_once($path.'view.inc.php');
            }
        }
    }else if ($_GET['action'] == 'edit'){

     if(isset($_POST['type_name_th'])){
        $data = [];
        $data['type_name_th'] = $_POST['type_name_th'];
        $data['type_name_en'] = $_POST['type_name_en'];

        $result = $project_model->updateProjectTypeByID($_POST['type_id'],$data);
        if($result){?>
            <script>
                window.location="index.php?content=project_type";
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

        $project = $project_model->getProjectTypeBy();
        require_once($path.'view.inc.php');
    }
    ?>
