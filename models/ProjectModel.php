<?php
require_once("BaseModel.php");

class ProjectModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getProjectTypeBy(){
        $sql = "SELECT * 
        FROM tb_project_type";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getProjectBy(){
        $sql = "SELECT * 
        FROM tb_project_detail as tb1
        LEFT JOIN tb_project_type ON tb1.project_detail_type = tb_project_type.type_id";

        // echo $sql;

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getProjectByID($id){
        $sql = "SELECT * 
        FROM tb_project_detail as tb1
        LEFT JOIN tb_project_type ON tb1.project_detail_type = tb_project_type.type_id

        WHERE project_detail_id = '$id' 
        ";

        // echo $sql;

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getProjectHeaderBy(){
        $sql = "SELECT * 
        FROM tb_project_header";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getProjectTypeByID($id){
        $sql = " SELECT * 
        FROM tb_project_type
        WHERE type_id = '$id' 
        ";

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getProjectHeaderByID($id){
        $sql = " SELECT * 
        FROM tb_project_header
        WHERE project_header_id = '$id' 
        ";

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getProjectImgByIDProject($id){
        $sql = " SELECT * 
        FROM tb_project_img
        WHERE project_id = '$id' 
        ";

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }
    function getProjectImgByID($id){
        $sql = " SELECT * 
        FROM tb_project_img
        WHERE img_id = '$id' 
        ";

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }

    function updateProjectTypeByID($id,$data = []){
        $data['type_name_en']=mysqli_real_escape_string(static::$db,$data['type_name_en']);
        $data['type_name_th']=mysqli_real_escape_string(static::$db,$data['type_name_th']);

        $sql = " UPDATE tb_project_type SET 
        type_name_en = '".$data['type_name_en']."',
        type_name_th = '".$data['type_name_th']."'
        
        WHERE type_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function updateProjectHeaderByID($id,$data = []){

        $data['project_header_name_en']=mysqli_real_escape_string(static::$db,$data['project_header_name_en']);
        $data['project_header_name_th']=mysqli_real_escape_string(static::$db,$data['project_header_name_th']);
        $data['project_header_detail_en']=mysqli_real_escape_string(static::$db,$data['project_header_detail_en']);
        $data['project_header_detail_th']=mysqli_real_escape_string(static::$db,$data['project_header_detail_th']);
        $data['project_header_img']=mysqli_real_escape_string(static::$db,$data['project_header_img']);

        $sql = " UPDATE tb_project_header SET 
        project_header_name_en = '".$data['project_header_name_en']."',
        project_header_name_th = '".$data['project_header_name_th']."',
        project_header_detail_en = '".$data['project_header_detail_en']."',
        project_header_detail_th = '".$data['project_header_detail_th']."',
        project_header_img = '".$data['project_header_img']."'
        
        WHERE project_header_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function updateProjectImageByID($id,$data = []){
        $data['project_img']=mysqli_real_escape_string(static::$db,$data['project_img']);


        $sql = " UPDATE tb_project_img SET 
        img = '".$data['project_img']."'
        
        WHERE img_id = $id "; 

        // echo $sql;

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function insertProjectType($data=[]){
        $sql = " INSERT INTO tb_project_type(
        type_name_en,
        type_name_th
    ) VALUES ('".
    mysqli_real_escape_string(static::$db,$data['type_name_en'])."','".
    mysqli_real_escape_string(static::$db,$data['type_name_th'])."') 
    ";
        // echo($sql);
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return mysqli_insert_id(static::$db);
    }else {
        return 0;
    }
}

function insertProject($data=[]){
    $sql = " INSERT INTO tb_project_detail(
    project_detail_type,
    project_detail_name_en,
    project_detail_name_th,
    project_detail_location_en,
    project_detail_location_th,
    project_detail_scope_en,
    project_detail_scope_th,
    project_detail_year,
    project_detail_img
) VALUES ('".
mysqli_real_escape_string(static::$db,$data['project_detail_type'])."','".
mysqli_real_escape_string(static::$db,$data['project_detail_name_en'])."','".
mysqli_real_escape_string(static::$db,$data['project_detail_name_th'])."','".
mysqli_real_escape_string(static::$db,$data['project_detail_location_en'])."','".
mysqli_real_escape_string(static::$db,$data['project_detail_location_th'])."','".
mysqli_real_escape_string(static::$db,$data['project_detail_scope_en'])."','".
mysqli_real_escape_string(static::$db,$data['project_detail_scope_th'])."','".
mysqli_real_escape_string(static::$db,$data['project_detail_year'])."','".
mysqli_real_escape_string(static::$db,$data['project_detail_img'])."') 
";
    // echo($sql);
if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
    return mysqli_insert_id(static::$db);
}else {
    return 0;
}
}

function updateProjectByID($id,$data = []){
    $data['project_detail_type']=mysqli_real_escape_string(static::$db,$data['project_detail_type']);
    $data['project_detail_name_en']=mysqli_real_escape_string(static::$db,$data['project_detail_name_en']);
    $data['project_detail_name_th']=mysqli_real_escape_string(static::$db,$data['project_detail_name_th']);
    $data['project_detail_location_en']=mysqli_real_escape_string(static::$db,$data['project_detail_location_en']);
    $data['project_detail_location_th']=mysqli_real_escape_string(static::$db,$data['project_detail_location_th']);
    $data['project_detail_scope_en']=mysqli_real_escape_string(static::$db,$data['project_detail_scope_en']);
    $data['project_detail_scope_th']=mysqli_real_escape_string(static::$db,$data['project_detail_scope_th']);
    $data['project_detail_year']=mysqli_real_escape_string(static::$db,$data['project_detail_year']);
    $data['project_detail_img']=mysqli_real_escape_string(static::$db,$data['project_detail_img']);

    $sql = " UPDATE tb_project_detail SET 
    project_detail_type = '".$data['project_detail_type']."',
    project_detail_name_en = '".$data['project_detail_name_en']."',
    project_detail_name_th = '".$data['project_detail_name_th']."',
    project_detail_location_en = '".$data['project_detail_location_en']."',
    project_detail_location_th = '".$data['project_detail_location_th']."',
    project_detail_scope_en = '".$data['project_detail_scope_en']."',
    project_detail_scope_th = '".$data['project_detail_scope_th']."',
    project_detail_year = '".$data['project_detail_year']."',
    project_detail_img = '".$data['project_detail_img']."'

    WHERE project_detail_id = $id "; 

        // echo $sql;

    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return 1;
    }else {
        return 0;
    }
}

function insertProjectImage($data=[]){
    $sql = " INSERT INTO tb_project_img(
    project_id,
    img
) VALUES ('".
mysqli_real_escape_string(static::$db,$data['project_id'])."','".
mysqli_real_escape_string(static::$db,$data['img'])."')";

if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
    return mysqli_insert_id(static::$db);
}else {
    return 0;
}
}

function deleteProjectByID($id){
    $sql = "DELETE FROM tb_project_detail WHERE project_detail_id = '$id' ";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return 1;
    }else {
        return 0;
    }
}

function deleteProjectTypeByID($id){
    $sql = "DELETE FROM tb_project_type WHERE type_id = '$id' ";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return 1;
    }else {
        return 0;
    }
}
function deleteProjectImgeByID($id){
    $sql = "DELETE FROM tb_project_img WHERE img_id = '$id' ";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return 1;
    }else {
        return 0;
    }
}
}
?>