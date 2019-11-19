<?
require_once('models/NewsModel.php'); 
require_once('models/DescriptionModel.php');

$description_model = new DescriptionModel;
$news_model = new NewsModel;

$news_header = $news_model -> getNewsHeaderBy();
$news_show = $news_model -> getNewsBy();
$description = $description_model->getDescriptionByID('6');

if(isset($_COOKIE['smt_language'])){
    $lng = $_COOKIE['smt_language'];
}
?>
<!DOCTYPE html>
<?php
$menu = 'news';
?>
<html lang="en">
<link rel="stylesheet" href="template/frontend/css/home-style.css">
<link rel="stylesheet" href="template/frontend/css/news-style.css">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEEm - <? echo $description['title'];?></title>
    <link rel="SHORTCUT ICON" href="img_upload/logo/logo.png"/>
    <link rel="icon" href="img_upload/logo/logo.png" type="image/x-icon"/>
    <meta name="Keywords" content="<?=$description['keyword']; ?>">
    <meta name="Description" content="<?=$description['description']; ?>">
    <!-- <meta property="fb:admins" content="" /> -->
    <meta property="og:url" content="<?=$baseLink;?>">
    <meta property="og:title" content="SEEm : <?=$description['title']; ?> ">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?=$description['title']; ?> : SEEm">
    <meta property="og:description" content="<?=$description['description']; ?>">
    <meta property="og:image" content="img_upload/logo/logo.png" />
    <link rel="image_src" href="img_upload/logo/logo.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:type" content="image/gif" />
    <meta property="og:image:type" content="image/png" />
    <?php require_once('view/header.inc.php'); ?>
</head>
<body>
    <?php require_once('view/menu.inc.php'); ?> 
    
    <?php
    if(!isset($_GET['action'])){
        require_once('view/news/header.inc.php');
        require_once('view/news/news.inc.php');
    }
    else if ($_GET['action'] == 'news_detail'){
        $news_id = $_GET['id'];
        $news_detail = $news_model -> getNewsByID($news_id);
        require_once('view/news/header_detail.inc.php');
        require_once('view/news/news_detail.inc.php');
    }
    ?>
    <?php require_once('view/home/footer.inc.php'); ?>
</body>
</html>