
<section class="header-panel ">
	<div class="slide-item-certification">
		<div class="slide-certification">
			<div class="slide-headercertification" >    
				<? 
				if($lng == "TH"){
					echo $certification['certification_title_th'];
				}else{
					echo $certification['certification_title_en'];
				} 
				?>
			</div>
		</div>
		<img style="height: 200px; width: 100%; object-fit: cover;" src="img_upload/certification/<?echo $certification['certification_img'];?>" alt="Los Angles">
	</div>
