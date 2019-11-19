<div class="row">
    <div class="col-lg-2" >
    </div>
    <div class="col-lg-8 no-padding" style="padding-top: 50px;">
        <div class="row">
            <div class="col-lg-6 no-padding"   >
                <img class="img-service-topicdetail" src="img_upload/service_detail/<?echo $service_detail['service_body_img'];?>" alt="Los Angles">
            </div>
            
            <div class="col-lg-6 no-padding" >

                <div  class=" text-service-detail">
                    <? 
                    if($lng == "TH"){
                        echo $service_detail['service_body_detail_th'];
                    }else{
                        echo $service_detail['service_body_detail_en'];
                    } 
                    ?> 
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-2 "  >
    </div>
</div>

<div class="row" style="margin-bottom: 50px;">
    <div class="col-lg-2 " >
    </div>

    <div class="col-lg-8 no-padding"  >
        <div class="row" style="padding-top: 10px; ">   
            <div class="col-lg-6 col-md-4 col-sm-6  col-6 no-padding">
                <img src="img_upload/service_detail/2.jpg" class="img-service-detail">      
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-6 no-padding">
                <img src="img_upload/service_detail/3.jpg" class="img-service-detail"> 
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-6 no-padding">
                <img src="img_upload/service_detail/4.jpg" class="img-service-detail">                
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-6 no-padding">
                <img src="img_upload/service_detail/5.jpg" class="img-service-detail">                
            </div>
        </div>
    </div>

    <div class="col-lg-2 "  >
        <div class="">

        </div>
    </div>
</div>
