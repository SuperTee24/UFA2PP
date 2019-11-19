<?php

require_once("BaseModel.php");
class UserModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getLogin($username, $password){

        $username = static::$db->real_escape_string($username);
        $password = static::$db->real_escape_string($password);

        if ($result = mysqli_query(static::$db,"SELECT *
            FROM tb_user 
            WHERE user_username = '$username' 
            AND user_password = '$password'", MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getUserBy(){
        $sql = "SELECT * 
        FROM tb_user 
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

    function getUserByID($id){
        $sql = " SELECT * 
        FROM tb_user 
        WHERE user_id = '$id' 
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

    function updateUserByID($id,$data = []){
        $data['user_firstname'] = mysqli_real_escape_string(static::$db,$data['user_firstname']);
        $data['user_lastname'] = mysqli_real_escape_string(static::$db,$data['user_lastname']);
        $data['user_phone'] = mysqli_real_escape_string(static::$db,$data['user_phone']);
        $data['user_email'] = mysqli_real_escape_string(static::$db,$data['user_email']);
        $data['user_username'] = mysqli_real_escape_string(static::$db,$data['user_username']);
        $data['user_password'] = mysqli_real_escape_string(static::$db,$data['user_password']);
        $data['user_image'] = mysqli_real_escape_string(static::$db,$data['user_image']);
        $data['user_address'] = mysqli_real_escape_string(static::$db,$data['user_address']);
        $data['user_province'] = mysqli_real_escape_string(static::$db,$data['user_province']);
        $data['user_amphur'] = mysqli_real_escape_string(static::$db,$data['user_amphur']);
        $data['user_district'] = mysqli_real_escape_string(static::$db,$data['user_district']);
        $data['user_zipcode'] = mysqli_real_escape_string(static::$db,$data['user_zipcode']);

        $sql = "UPDATE tb_user SET 
        user_firstname = '".$data['user_firstname']."', 
        user_lastname = '".$data['user_lastname']."', 
        user_phone = '".$data['user_phone']."', 
        user_email = '".$data['user_email']."', 
        user_username = '".$data['user_username']."', 
        user_password = '".$data['user_password']."', 
        user_image = '".$data['user_image']."',
        user_address = '".$data['user_address']."',
        user_province = '".$data['user_province']."',
        user_amphur = '".$data['user_amphur']."',
        user_district = '".$data['user_district']."',
        user_zipcode = '".$data['user_zipcode']."'

        WHERE user_id = $id ";
        
        echo $sql;
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function insertUser($data=[]){
        $sql = " INSERT INTO tb_user(
        user_firstname,
        user_lastname, 
        user_phone,
        user_email,
        user_username,
        user_password,
        user_image,
        user_address,
        user_province,
        user_amphur,
        user_district,
        user_zipcode
    ) VALUES ('".
    mysqli_real_escape_string(static::$db,$data['user_firstname'])."','".
    mysqli_real_escape_string(static::$db,$data['user_lastname'])."','".
    mysqli_real_escape_string(static::$db,$data['user_phone'])."','".
    mysqli_real_escape_string(static::$db,$data['user_email'])."','".
    mysqli_real_escape_string(static::$db,$data['user_username'])."','".
    mysqli_real_escape_string(static::$db,$data['user_password'])."','".
    mysqli_real_escape_string(static::$db,$data['user_image'])."','".
    mysqli_real_escape_string(static::$db,$data['user_address'])."','".
    mysqli_real_escape_string(static::$db,$data['user_province'])."','".
    mysqli_real_escape_string(static::$db,$data['user_amphur'])."','".
    mysqli_real_escape_string(static::$db,$data['user_district'])."','".
    mysqli_real_escape_string(static::$db,$data['user_zipcode'])."')
    ";
    // echo $sql;
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return mysqli_insert_id(static::$db);
    }else {
        return 0;
    }
}

function deleteUserByID($id){
    $sql = " DELETE FROM tb_user WHERE user_id = '$id' ";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return 1;
    }else {
        return 0;
    }
}
}
?>