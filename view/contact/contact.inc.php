<div class="row" style="margin-bottom: 50px;">
        <div class="col-lg-6 no-padding" >
            <form id="frmUpload" action="formadd_cont.php" method="post" enctype="multipart/form-data"  onSubmit="">
            <div class="form-inline box-name name">
                <input type="text" class="form-control form-inline "  id="name" name="name"  type="text" placeholder="<?PHP
                    if($lng == "TH"){
                        echo 'ชื่อ';
                    }else{
                         echo 'NAME';
                    } 
                    ?>" style="width:50%; background: transparent; border-color: #464852; ">
                <input type="text" class="form-control  form-inline "  id="email" name="email"  type="text" placeholder="<?PHP
                    if($lng == "TH"){
                        echo 'อีเมลล์';
                    }else{
                         echo 'EMAIL';
                    } 
                    ?>" style="width:50%; background: transparent; border-color: #464852; ">
            </div>  
            <div class="box-email subject">
                <input type="text" class="form-control " id="title" name="title" type="text" placeholder="<?PHP
                    if($lng == "TH"){
                        echo 'ชื่อเรื่อง';
                    }else{
                         echo 'SUBJECT';
                    } 
                    ?>" style="background: transparent; border-color: #464852; ">
            </div>
            <div  class="box-massage massage">
                <textarea rows="4" type="text" name="detail" id="detail" class="form-control " type="text" placeholder="<?PHP
                    if($lng == "TH"){
                        echo 'ข้อความ';
                    }else{
                         echo 'MASSAGE';
                    } 
                    ?>" style="background: transparent; border-color: #464852; "></textarea>
            </div>
            <div class="btn-submit">  
                <button class="btn btn-lg"><?PHP
                    if($lng == "TH"){
                        echo 'ยืนยัน';
                    }else{
                         echo 'SUBMIT';
                    } 
                    ?></button>
            </div> 
        </form>
        </div>
  
    <div class="col-lg-6 no-padding" >
                    <div  class="contact">
                    <?PHP
                    if($lng == "TH"){
                        echo 'ติดต่อเรา';
                    }else{
                         echo 'CONTACT INFO';
                    } 
                    ?>
                    </div>  
                    <div  class=" address1">
                    <i class="fas fa-map-marker-alt" style="color: #a3a3a3;"></i>
                    <?PHP
                    if($lng == "TH"){
                        echo 'ที่อยู่';
                    }else{
                         echo 'Address';
                    } 
                    ?>
                    </div>
                    <div  class="address2">
                    <? 
                    if($lng == "TH"){
                    echo $contact_detail['contact_body_address_th'];
                    }else{
                    echo $contact_detail['contact_body_address_en'];
                    } 
                    ?>
                    </div>

                    <div  class="email1">
                    <i class="fas fa-envelope" style="color: #a3a3a3;"></i>
                    <?PHP
                    if($lng == "TH"){
                        echo 'อีเมลล์';
                    }else{
                         echo 'Email';
                    } 
                    ?>
                    </div>
                    <div  class="email2">
                    <? 
                    if($lng == "TH"){
                    echo $contact_detail['contact_body_email_th'];
                    }else{
                    echo $contact_detail['contact_body_email_en'];
                    } 
                    ?>
                    </div>
                    <div  class=" time1 ">
                    <i class='far fa-clock' style="color: #a3a3a3;"></i>
                    <?PHP
                    if($lng == "TH"){
                        echo 'เวลาทำงาน';
                    }else{
                         echo 'Working time';
                    } 
                    ?>
                    </div>
                    <div  class="time2">
                    <? 
                    if($lng == "TH"){
                    echo $contact_detail['contact_body_time_th'];
                    }else{
                    echo $contact_detail['contact_body_time_en'];
                    } 
                    ?>
                    </div>
                </div>


    <div class="row" style="width: 100%;     margin-top: 3vw; ">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7708.542254299826!2d102.10732400000002!3d14.972985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12872ee912586913!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4i-C4teC4oSDguYDguK3guYfguJnguIjguLTguYDguJnguLXguKLguKPguLTguYjguIcg4LiE4Lit4LiZ4LiL4Lix4Lil4LmB4LiV4LiZ4LiX4LmMIOC4iOC4s-C4geC4seC4lA!5e0!3m2!1sth!2sus!4v1551080691781" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

</div>