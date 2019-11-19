  <? 
  session_start();
  require_once('../models/Contact/')
  require_once('../mail/class.phpmailer.php');
  $model = new ContactModel;

  $contact = $model->getContact();

  $MailTo=$contact['contact_email'];

  $MailSub= $_REQUEST['name'] ;
  $Mailphone= $_REQUEST['phone'];
  $MailFrom = $_REQUEST['title'] ;
  $MailMessage = $_REQUEST['detail'];
  $MailFrom2 = $_REQUEST['email'];
  $msg = $_REQUEST['email'];
  $d1=date("d");
  $d2=date("m");
  $d3=date("Y");
  $d4=date("H");
  $d5=date("i");
  $d6=date("s");
  $date22="$d1-$d2-$d3  $d4:$d5:$d6";


  $MailSubject = $MailSub." - Contact From www.mengseng.co.th";
  // if($_SESSION["captcha"] == $_POST['captcha']){



  $detail11=iconv("utf8","tis-620","

    <table width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
    <tr>
    <td width='1'></td>
    <td width='700' align='center' bgcolor='#FBD411' style='border-left:1px #060 inset'><font color='#404040' size='2'><b>&nbsp;ข้อความจาก www.futuresupreme.com</b></font></td>
    </tr>
    <tr>
    <td colspan='2' bgcolor='#FFFFFF'><table width='600' border='0' cellspacing='1' cellpadding='0'>
    <tr>
    <td bgcolor='#FFFFFF'><table width='599' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td><font color='#333333'  size='2'>&nbsp;</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td><font color='#333333'  size='2'><b>&nbsp;วันที่  :</b>&nbsp;$date22</font></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td><font color='#333333'  size='2'><b>&nbsp;ผู้ส่ง :</b>&nbsp;$MailSub</font></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td><font color='#333333'  size='2'><b>&nbsp;อีเมล์ :</b>&nbsp;$MailFrom</font></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td><font color='#333333'  size='2'><b>&nbsp;เบอร์โทรศัพท์ :</b>&nbsp;$Mailphone</font></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td><font color='#333333'  size='2'><b>&nbsp;เรื่อง :</b>&nbsp;$MailSubject</font></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td><font color='#333333'  size='2'><b>&nbsp;รายละเอียด :</b></font></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td><table width='590' border='0' cellspacing='1' cellpadding='0'>
    <tr>
    <td><font color='#333333'  size='2'>&nbsp;$MailMessage</font></td>
    </tr>
    </table></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    </table></td>
    </tr>
    </table></td>
    </tr>
    </table>");

  $MailMessage2 ="$detail11<br><br><br>" ;
  $Headers = "MIME-Version: 1.0\r\n" ;
  $Headers .= "Content-type: text/html; charset=tis-620\r\n" ;
  $Headers .= "From: ".$MailFrom."\r\n" ;
  $Headers .= "Reply-to: ".$MailFrom2."\r\n" ;
  $Headers .= "X-Priority: 3\r\n" ;
  $Headers .= "X-Mailer: PHP mailer\r\n" ;
  $mail=mail($MailTo,$MailSubject,$MailMessage2, $Headers);
  if($mail)
  {
    echo "<script>alert(\"ส่งข้อความเสร็จสมบูรณ์ / send Contact Complete \"); </script>";
    echo "<script language='JavaScript' type='text/javascript'>window.parent.cleardata();</script>";	
    echo "<script> window.location.href ='../contact.php';</script>";
  }
  else{
    echo "Mail sending failed."; 

  }
		//}
  // }
  // else {
  // 	echo "<script>alert(\"Wrong Captcha \"); </script>";
  // 	echo "<script> window.location.href ='../contact.php';</script>";
  // }

  ?>
<!--   <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->