<?
require_once('models/SettingModel.php');  
$setting_model = new SettingModel;
$setting = $setting_model->getSettingBy();
?>

<style>
.active-menu{
    border-bottom: 3px solid #458ccc;
}
</style>
<div class="container" style="background: white; border-radius: 5px; margin-top: 50px;" >
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php"><img src="img_upload/logo/sss.png" class="img-icon"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="padding-top: 30px;">
            <ul class="nav navbar-nav layout-menu">
                
            </ul>
            <ul class="nav navbar-nav ml-auto layout-menu">
                <li class="nav-item <?php if($menu == ''){ echo 'active-menu'; }?>">
                    <a class="nav-link" href="index.php">
                    <?php 
                        if($lng == "TH"){
                            echo "หน้าหลัก";
                        }else{
                            echo "HOME";
                        } 
                    ?>
                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'about'){ echo 'active-menu'; }?>">
                    <a class="nav-link" href="about.php">
                    <?php 
                        if($lng == "TH"){
                            echo "เกี่ยวกับเรา";
                        }else{
                            echo "ABOUT US";
                        } 
                    ?>
                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'service'){ echo 'active-menu'; }?>">
                    <a class="nav-link" href="service.php">
                    <?php 
                        if($lng == "TH"){
                            echo "บริการ";
                        }else{
                            echo "SERVICE";
                        } 
                    ?>
                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'project'){ echo 'active-menu'; }?>">
                    <a class="nav-link" href="project.php">
                    <?php 
                        if($lng == "TH"){
                            echo "โครงงาน";
                        }else{
                            echo "PROJECT";
                        } 
                    ?>
                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'certification'){ echo 'active-menu'; }?>">
                    <a class="nav-link" href="certification.php">
                    <?php 
                        if($lng == "TH"){
                            echo "การรับรอง";
                        }else{
                            echo "CERTIFICATION";
                        } 
                    ?>
                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'news'){ echo 'active-menu'; }?>">
                    <a class="nav-link" href="news.php">
                    <?php 
                        if($lng == "TH"){
                            echo "ข่าวสาร";
                        }else{
                            echo "NEWS & EVENT";
                        } 
                    ?>
                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'contact'){ echo 'active-menu'; }?>">
                    <a class="nav-link" href="contact.php">
                    <?php 
                        if($lng == "TH"){
                            echo "ติดต่อเรา";
                        }else{
                            echo "CONTACT US";
                        } 
                    ?>
                    </a>
                </li>
            
            </ul>
        </div>
    </nav>
</div>


<script>
	function setLanguage(lng){
		$.post( "controls/setLanguage.php", { lng: lng })
			.done(function( data ) {
                window.location.reload();
		});
	}
</script>
