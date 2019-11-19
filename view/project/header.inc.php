
<section class="header-panel ">
	<div class="slide-item-project">
		<div class="slide-project">
			<div class="slide-headerproject">    
				<?PHP
				if($lng == "TH"){
					echo $project_header['project_header_name_th'];
				}else{
					echo $project_header['project_header_name_en'];
				} 
				?>
			</div>
		</div>
		<img style="height: 200px; width: 100%; object-fit: cover;" src="img_upload/header_project/<?echo $project_header['project_header_img'] ;?>" alt="Los Angles">
	</div>
