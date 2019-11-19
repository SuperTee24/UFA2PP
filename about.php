<?
require_once('models/AboutModel.php'); 
require_once('models/AboutWhyModel.php'); 
require_once('models/AboutAwardModel.php'); 
require_once('models/DescriptionModel.php');

$description_model = new DescriptionModel;
$about_header_model = new AboutModel;
$about_why_model = new AboutWhyModel;
$about_award_model = new AboutAwardModel;

$about_award = $about_award_model -> getAboutAwradBy();
$about_why = $about_why_model -> getAboutWhyBy();
$about_header = $about_header_model->getAboutHeaderBy();
$about_detail = $about_header_model -> getAboutDetailBy();
$about_img1 = $about_header_model -> getAboutImgByIDDetail('1');
$about_img2 = $about_header_model -> getAboutImgByIDDetail('2');
$description = $description_model->getDescriptionByID('2');
if(isset($_COOKIE['smt_language'])){
	$lng = $_COOKIE['smt_language'];
}
?>
<!DOCTYPE html>
<?php
$menu = 'about';
?>
<html lang="en">
<link rel="stylesheet" href="template/frontend/css/home-style.css">
<link rel="stylesheet" href="template/frontend/css/about-style.css">
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
	<?php require_once('view/about/header.inc.php'); ?>
	<?php require_once('view/about/about.inc.php'); ?>
	<?php require_once('view/home/footer.inc.php'); ?>

</body>
</html>