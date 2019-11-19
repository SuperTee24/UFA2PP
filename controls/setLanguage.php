<?php
if(isset($_POST['lng'])){
    setcookie('smt_language', $_POST['lng'] , time() + (86400 * 30), "/");
}else{
    setcookie('smt_language', "EN" , time() + (86400 * 30), "/");
}
?>