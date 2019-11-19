<?
date_default_timezone_set("Asia/Bangkok");
require_once('models/AboutModel.php'); 
require_once('models/HomeSlideModel.php'); 
require_once('models/HomeCustomerModel.php'); 
require_once('models/AboutWhyModel.php'); 
require_once('models/ServiceModel.php'); 
require_once('models/ProjectModel.php');
require_once('models/NewsModel.php');  
require_once('models/DescriptionModel.php');

$description_model = new DescriptionModel;
$project_model = new ProjectModel;
$news_model = new NewsModel;
$service_model = new ServiceModel;
$about_why_model = new AboutWhyModel;
$home_slide_model = new HomeSlideModel;
$home_customer_model = new HomeCustomerModel;
$about_header_model = new AboutModel;

$news = $news_model -> getNewsTwodata();
$project_header = $project_model -> getProjectHeaderBy();
$project_type = $project_model -> getProjectTypeBy();
$project_show = $project_model -> getProjectBy();
$service = $service_model -> getServiceDetailBy();
$about_why = $about_why_model -> getAboutWhyBy();
$about_detail = $about_header_model -> getAboutDetailByID('2');
$about_img = $about_header_model -> getAboutImgBy();
$home_customer = $home_customer_model -> getHomeCustomerImgBy();
$home_slide = $home_slide_model->getHomeSlideBy();
$home_customer_detail = $home_customer_model->getHomeCustomerBy();
$description = $description_model->getDescriptionByID('1');

if(isset($_COOKIE['smt_language'])){
	$lng = $_COOKIE['smt_language'];
}
?>
<!DOCTYPE html>

<html lang="en">
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
	
	
	<link rel="stylesheet" href="template/frontend/css/home-style.css">
</head>
<body style="background: black;">

<!-- <div class="container" style=""> -->
	<?php require_once('view/header.inc.php'); ?>
 	<?php require_once('view/menu.inc.php'); ?> 
    <?php require_once('view/home/header-slide.inc.php'); ?>
    <?PHP require_once('view/home/about.inc.php'); ?>
    <?PHP require_once('view/home/service.inc.php'); ?>
    <?PHP require_once('view/home/customer.inc.php'); ?>
    <?PHP require_once('view/home/project.inc.php'); ?>
    <?PHP require_once('view/home/news.inc.php'); ?>
    <?PHP require_once('view/home/footer.inc.php'); ?>
</div>
</body>
</html>

