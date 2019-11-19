<div class="row" style="background-color:#222533;">
    <div class="col-lg-2 " >

    </div>
    <div class="col-lg-8 "  >
        <div class="row">




            <div class="col-lg-12 "  >
                <div class="row" style="padding-top: 70px; margin-bottom: 60px; ">   
                    <div class="col-4 footer">
                        <div class="text-header-medium" >
                            <?PHP
                            if($lng == "TH"){
                                echo '
                                โทรหาเราตอนนี้';
                            }else{
                                echo 'Call Us Now ';
                            } 
                            ?>
                        </div>
                        <div class="text-header-medium" style="line-height: 10px">
                            <?PHP
                            if($lng == "TH"){
                                echo $setting['setting_footer_call'];
                            }else{
                                echo $setting['setting_footer_call'];
                            } 
                            ?>
                        </div>
                    </div>




                    <div class="col-4 footer">
                        <div class="text-header-medium" >
                            <?PHP
                            if($lng == "TH"){
                                echo 'ที่อยู่';
                            }else{
                                echo 'COME VISIT US ';
                            } 
                            ?>
                        </div>
                        <div class="footer-address">
                            <?PHP
                            if($lng == "TH"){
                                echo $setting['setting_footer_come_th'];
                            }else{
                                echo $setting['setting_footer_come_en'];
                            } 
                            ?>
                        </div>
                    </div>

                    <div class="col-4 footer" style="">
                        <div class="text-header-medium" >
                            <?PHP
                            if($lng == "TH"){
                                echo 'ส่งข้อความ';
                            }else{
                                echo 'SEND A MESSENGE';
                            } 
                            ?>
                        </div>
                        <div class="footer-email">
                            <?PHP
                            if($lng == "TH"){
                                echo $setting['setting_footer_send_th'];
                            }else{
                                echo $setting['setting_footer_send_en'];
                            } 
                            ?>
                        </div>
                    </div>
                </div> 
            </div>







        </div>


        <div class="row">




            <div class="col-lg-12 "  >
                <div class="row" style="margin-bottom: 60px;">   
                    <div class="col-4">
                        <div>
                            <a class="fab fa-facebook-f icon-footer" href="<?echo $setting['setting_footer_url_face'];?>"  style="font-size:36px; color:#fff;"></a>
                            <a class="fab fa-twitter icon-footer" href="<?echo $setting['setting_footer_twitter'];?>"  style="font-size:36px; color:#fff;"></a>
                            <a class="fab fa-youtube icon-footer" href="<?echo $setting['setting_footer_youtube'];?>"  style="font-size:36px; color:#fff;"></a>
                        </div>  
                    </div>




                    <div class="col-4 " >
                        <div class="text-header-medium" >
                            <?PHP
                            if($lng == "TH"){
                                echo 'ชั่วโมงทำงาน';
                            }else{
                                echo 'Hours work';
                            } 
                            ?>
                        </div>
                        <div class="footer-work" >
                            <?PHP
                            if($lng == "TH"){
                                echo $setting['setting_footer_hours_th'];
                            }else{
                                echo $setting['setting_footer_hours_en'];
                            } 
                            ?>
                        </div>
                    </div>

                    <div class="col-4 " >

                    </div>
                </div>
            </div> 
        </div>
    </div>

</div>
<div class="col-lg-2 "  >
    <div class="">

    </div>
</div>
</div>






