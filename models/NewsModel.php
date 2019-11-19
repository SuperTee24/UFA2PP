<?php
require_once("BaseModel.php");

class NewsModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getNewsHeaderBy(){
        $sql = "SELECT * 
        FROM tb_news_header";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getNewsBy(){
        $sql = "SELECT * 
        FROM tb_news as tb1
        LEFT JOIN tb_news_type ON tb1.type_id = tb_news_type.type_id";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }
    function getNewsTwodata(){
        $sql = "SELECT * 
        FROM tb_news as tb1
        LEFT JOIN tb_news_type ON tb1.type_id = tb_news_type.type_id
        order by tb1.news_id DESC limit 0,2";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getNewsTypeBy(){
        $sql = "SELECT * 
        FROM tb_news_type";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getNewsTypeByID($id){
        $sql = " SELECT * 
        FROM tb_news_type
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

    function getNewsByID($id){
        $sql = "SELECT * 
        FROM tb_news as tb1
        LEFT JOIN tb_news_type ON tb1.type_id = tb_news_type.type_id

        WHERE news_id = '$id' 
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

    function updateNewsHeaderByID($id,$data = []){

        $data['news_header_img']=mysqli_real_escape_string(static::$db,$data['news_header_img']);

        $sql = " UPDATE tb_news_header SET 
        news_header_img = '".$data['news_header_img']."'

        WHERE news_header_id = $id "; 

        // echo $sql;
        
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }


    public function insertNews($data=[]){

        $sql = " INSERT INTO tb_news(
        type_id,
        news_name_en,
        news_name_th,
        news_description_en,
        news_description_th,
        news_detail_en,
        news_detail_th,
        news_img,
        news_date) 
        VALUES ('".
        mysqli_real_escape_string(static::$db,$data['type_id'])."','".
        mysqli_real_escape_string(static::$db,$data['news_name_en'])."','".
        mysqli_real_escape_string(static::$db,$data['news_name_th'])."','".
        mysqli_real_escape_string(static::$db,$data['news_description_en'])."','".
        mysqli_real_escape_string(static::$db,$data['news_description_th'])."','".
        mysqli_real_escape_string(static::$db,$data['news_detail_en'])."','".
        mysqli_real_escape_string(static::$db,$data['news_detail_th'])."','".
        mysqli_real_escape_string(static::$db,$data['news_img'])."',
        NOW());
        ";
        // echo($sql);
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return mysqli_insert_id(static::$db);
        }else {
            return 0;
        }
    }

    function updateNewsByID($id,$data = []){
        $data['type_id']=mysqli_real_escape_string(static::$db,$data['type_id']);
        $data['news_name_en']=mysqli_real_escape_string(static::$db,$data['news_name_en']);
        $data['news_name_th']=mysqli_real_escape_string(static::$db,$data['news_name_th']);
        $data['news_description_en']=mysqli_real_escape_string(static::$db,$data['news_description_en']);
        $data['news_description_th']=mysqli_real_escape_string(static::$db,$data['news_description_th']);
        $data['news_detail_en']=mysqli_real_escape_string(static::$db,$data['news_detail_en']);
        $data['news_detail_th']=mysqli_real_escape_string(static::$db,$data['news_detail_th']);
        $data['news_img']=mysqli_real_escape_string(static::$db,$data['news_img']);

        $sql = " UPDATE tb_news SET 
        type_id = '".$data['type_id']."',
        news_name_en = '".$data['news_name_en']."',
        news_name_th = '".$data['news_name_th']."',
        news_description_en = '".$data['news_description_en']."',
        news_description_th = '".$data['news_description_th']."',
        news_detail_en = '".$data['news_detail_en']."',
        news_detail_th = '".$data['news_detail_th']."',
        news_img = '".$data['news_img']."',
        news_date = NOW()

        WHERE news_id = $id"; 

        // echo $sql;

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function deleteNewsByID($id){
        $sql = "DELETE FROM tb_news WHERE news_id = '$id' ";
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

}
?>