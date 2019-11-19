<section class="header-panel ">
	<div class="slide-item-service">
		<div class="slide-service">
			<div class="slide-header-service" >  
				<? 
				if($lng == "TH"){
					echo $header_sevice['service_header_title_th'];
				}else{
					echo $header_sevice['service_header_title_en'];
				} 
				?>  
			</div>
		</div>
		<img style="height: 200px; width: 100%; object-fit: cover;" src="img_upload/service_back/<?echo $header_sevice['service_header_img'];?>" alt="Los Angles">
	</div>
