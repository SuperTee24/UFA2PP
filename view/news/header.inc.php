<section class="header-panel ">
    <div class="slide-item-news">
        <div class="slide-about-news">
            <div class="slide-headernews">    
            <? 
				if($lng == "TH"){
					echo 'ข่าวสาร และ กิจกรรม';
				}else{
					echo 'NEWS & EVENT';
				} 
				?>
            </div>
        </div>
        <img style="height: 200px; width: 100%; object-fit: cover;" src="img_upload/news/<? echo $news_header['news_header_img'];?>" alt="Los Angles">
    </div>

    