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

            <div class="wrap-form-user" style="background: white; border-radius: 5px; margin-top: 50px;">
                <form class="form-user wrap-flex noflex-M" method="post" action="https://www.ufacash.com/member/member/login_process">
                    <input type="text" name="username" id="username" required="" placeholder="Username" value="" class="icon-input icon-user">
                    <input type="password" name="secret_password" required="" id="secret_password" placeholder="รหัสผ่าน" value="" class="icon-input icon-pass">
                    <button type="submit" id="btnLogin" title="เข้าระบบ" class="lsid-rounded-box" style="margin-right: 5px;padding-left: 5px;padding-right: 5px;display: inline-block;">เข้าระบบ</button>
                    <button type="button" title="สมัครสมาชิก" class="lsid-rounded-box blue" onclick="PopupCenter('https://www.ufacash.com/member/member/register_new', 'myPop1',800,600);" href="javascript:void(0);" style="margin-right: 5px;padding-left: 5px;padding-right: 5px;display: inline-block;">สมัครสมาชิก</button>
                    <button type="button" onclick="PopupCenter('https://www.ufacash.com/member/ucp/deposit', 'myPop1',800,600);" href="javascript:void(0);" title="ฝาก/ถอน" class="lsid-rounded-box yellow" style="padding-left: 28px;padding-right: 28px;display: inline-block;">ฝาก/ถอน</button>
                    <button type="button" onclick="PopupCenter('https://www.ufacash.com/member/member/forget_password/', 'myPop1',800,600);" href="javascript:void(0);" title="ลืมรหัสผ่าน" class="lsid-rounded-box" style="padding-left: 28px;padding-right: 28px;display: inline-block;"><small>ลืมรหัสผ่าน</small></button>
                </form>

            </div>
            


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
