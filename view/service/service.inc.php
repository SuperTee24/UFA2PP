<div class="row">
    <div class="col-lg-2" >
    </div>
    <div class="col-lg-8" style="padding-top: 30px;">
        <div class="row">
            <div class="topic-service" >    
                <? 
                if($lng == "TH"){
                    echo $header_sevice['service_header_title_th'];
                }else{
                    echo $header_sevice['service_header_title_en'];
                } 
                ?>  
            </div>    
            <div class="detail-service" >    
             <? 
             if($lng == "TH"){
                echo $header_sevice['service_header_detail_th'];
            }else{
                echo $header_sevice['service_header_detail_en'];
            } 
            ?>  
        </div>        
    </div>
</div>
<div class="col-lg-2">
</div>
</div>

<div class="row">
    <div class="col-lg-2 " style = "padding-right : 0px; padding-left : 0px;" > 
    </div>

    <div class="col-lg-8 "  >

        <div class="row" style="padding-top: 70px; margin-bottom: 60px;">   
            <?PHP for($i=0 ; $i < count($detail_sevice) ; $i++){ ?>
                <div class="col-lg-4 col-md-6 col-sm-12" style = "padding-right : 0px; margin-top: 10px;     padding-left: 0px;"  >

                    <div class="slide-detail-service" >
                        <div class="slide-topic-detail">
                          <? 
                          if($lng == "TH"){
                            echo $detail_sevice[$i]['service_body_name_th'];
                        }else{
                            echo $detail_sevice[$i]['service_body_name_en'];
                        } 
                        ?>  
                    </div>
                    <div class="slide-text-detail-service cut-text-multi-slide-text-detail-service">
                        <? 
                        if($lng == "TH"){
                            echo $detail_sevice[$i]['service_body_description_th'];
                        }else{
                            echo $detail_sevice[$i]['service_body_description_en'];
                        } 
                        ?>  
                    </div>
                    <div style="padding-left: 24px; padding-top: 30px;">
                        <a class="button readmore" href="?action=service_detail&id=<?echo $detail_sevice[$i]['service_body_id'];?>">
                            READMORE
                        </a>
                    </div>
                </div>
                <img class="img-service"  src="img_upload/service_back/<?echo $detail_sevice[$i]['service_body_header_img']?>" alt="Los Angles">
            </div>
            <?}?>
        </div>
    </div>

    <div class="col-lg-2 "  >
        <div class="">         
        </div>
    </div>
</div>
