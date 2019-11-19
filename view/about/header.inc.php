<section class="header-panel ">
	<div class="slide-item-about">
		<div class="slide-about" ">
			<div class="slide-header-about"  >   
				<? 
				if($lng == "TH"){
					echo $about_header['about_header_title_th'];
				}else{
					echo $about_header['about_header_title_en'];
				} 
				?>
			</div>
		</div>
		<img style="height: 200px; width: 100%; object-fit: cover;" src="img_upload/about_header/<?echo $about_header['about_header_img'];?>" alt="Los Angles">
	</div>

