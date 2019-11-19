<div class="row">
    <div class="col-lg-2 " >
        
    </div>

    
    <div class="col-lg-8 "   >
    <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
    <?PHP for($i=0 ; $i < count($news_show) ; $i++){ ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
            <img src="img_upload/news/<?echo $news_show[$i]['news_img'];?>" class="img-news"> 
                    <div class="text-center" style="padding-top: 20px; font-size: 1.4vw;">
                    <?PHP
                if($lng == "TH"){
                    echo $news_show[$i]['news_name_th'];
                }else{
                    echo $news_show[$i]['news_name_en'];
                } 
                ?>
                    </div>
                            <div class="text-center cut-text-multi-text-news" style="padding-top: 5px; color:#8f8f8f; font-size: 1.1vw;">
                            <?PHP
                if($lng == "TH"){
                    echo $news_show[$i]['news_description_th'];
                }else{
                    echo $news_show[$i]['news_description_en'];
                } 
                ?>
                            </div>
                                <div class="text-center" style=" padding-top:20px;  ">  
                                <a class="btn btn-lg" href="?action=news_detail&id=<?echo $news_show[$i]['news_id'];?>">
                                <?PHP
                if($lng == "TH"){
                    echo 'เพิ่มเติม';
                }else{
                    echo 'KNOW MORE';
                } 
                ?> </a>
                                </div>         
             </div>
    <? } ?>
</div>
</div>

    <div class="col-lg-2 "  >
        <div class="">
            
        </div>
    </div>
</div>