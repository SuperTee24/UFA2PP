<section class="header-panel ">
    <div class="slide-item-news">
        <div class="slide-about-news">
            <div class="slide-headernews">    
            <? 
				if($lng == "TH"){
					echo $news_detail['type_name_th'];
				}else{
					echo $news_detail['type_name_en'];
				} 
				?>
            </div>
        </div>
        <img style="height: 200px; width: 100%;" src="img_upload/news/<? echo $news_header['news_header_img'];?>" alt="Los Angles">
    </div>

    