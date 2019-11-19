<?php
$path = "view/project/";
require_once('models/ProjectModel.php'); 
$project_model = new ProjectModel;
if(!isset($_GET['action'])){
	require_once($path.'project.inc.php');
}

else if ($_GET['action'] == 'project_detail'){
	$project_id = $_GET['id'];
	$project_detail = $project_model -> getProjectByID($project_id);
	$project_img = $project_model -> getProjectImgByIDProject($project_id);
	

	require_once($path.'project_detail.inc.php');
}
?>


