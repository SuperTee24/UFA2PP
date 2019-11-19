<?php
require_once('models/NewsModel.php'); 

$news_model = new NewsModel;

$news_header = $news_model -> getNewsHeaderBy();

$path = "view/news/";
if(!isset($_GET['action'])){
    require_once($path.'news.inc.php');
}
else if ($_GET['action'] == 'news_detail'){
    $news_id = $_GET['id'];

    $news_detail = $news_model -> getNewsByID($news_id);

    require_once($path.'news_detail.inc.php');

}
?>


