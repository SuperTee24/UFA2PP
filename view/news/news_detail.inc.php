
<div class="row">
        <div class="col-lg-2" >
        </div>
                
                <div class="col-lg-8 no-padding" style="padding-top: 50px;">
                    <div class="row">
                        <img  src="img_upload/news//<?echo $news_detail['news_img'];?>" alt="Los Angles" class="img-newsdetail" >
                    </div>
                </div>

    <div class="col-lg-2 ">
    </div>
</div>

<div class="row" style="margin-bottom: 50px;">
    <div class="col-lg-2 " >
    </div>

    <div class="col-lg-8 no-padding"  >
        <div class="row news-detail">   
            <div class="news-topic">
            <?PHP
				if($lng == "TH"){
					echo $news_detail['news_name_th'];
				}else{
					echo $news_detail['news_name_en'];
				} 
				?>
            </div>
            <div  class="news-detail1">
            <?PHP
				if($lng == "TH"){
					echo $news_detail['news_detail_th'];
				}else{
					echo $news_detail['news_detail_en'];
				} 
				?>
            </div>
        </div>
    </div>
</div>

    <div class="col-lg-2 "  >
        <div class="">
            
        </div>
    </div>

