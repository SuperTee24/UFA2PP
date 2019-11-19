<?php
require_once('models/ServiceModel.php'); 

$service_model = new ServiceModel;
$path = "view/service/";
if(!isset($_GET['action'])){
	// require_once($path.'service.inc.php');
}
else if ($_GET['action'] == 'service_detail'){

	// require_once($path.'service_detail.inc.php');
}
?>


